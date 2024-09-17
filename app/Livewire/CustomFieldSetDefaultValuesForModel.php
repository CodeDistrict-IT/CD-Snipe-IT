<?php

namespace App\Livewire;

use App\Models\AssetModel;
use App\Models\CustomField;
use App\Models\CustomFieldset;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CustomFieldSetDefaultValuesForModel extends Component
{
    public $add_default_values;

    public $fieldset_id;

    public $model_id;

    public array $selectedValues = [];

    public function mount($model_id = null)
    {
        $this->model_id = $model_id;
        $this->fieldset_id = $this->model?->fieldset_id;
        $this->add_default_values = ($this->model?->defaultValues->count() > 0);

        $this->initializeSelectedValuesArray();
        $this->populatedSelectedValuesArray();
    }

    #[Computed]
    public function model()
    {
        return AssetModel::find($this->model_id);
    }

    #[Computed]
    public function fields()
    {
        $customFieldset = CustomFieldset::find($this->fieldset_id);

        if ($customFieldset) {
            return $customFieldset?->fields;
        }

        return collect();
    }

    public function render()
    {
        return view('livewire.custom-field-set-default-values-for-model');
    }

    /**
     * Livewire property binding plays nicer with arrays when it knows
     * which keys will be present instead of them being
     * dynamically added (this is especially true for checkboxes).
     *
     * Let's go ahead and initialize selectedValues with all the potential keys (custom field db_columns).
     */
    private function initializeSelectedValuesArray(): void
    {
        CustomField::all()->each(function ($field) {
            $this->selectedValues[$field->db_column] = null;

            if ($field->element === 'checkbox') {
                $this->selectedValues[$field->db_column] = [];
            }
        });
    }

    /**
     * Populate the selectedValues array with the
     * default values or old input for each field.
     */
    private function populatedSelectedValuesArray(): void
    {
        $this->fields->each(function ($field) {
            $this->selectedValues[$field->db_column] = $this->getSelectedValueForField($field);
        });
    }

    private function getSelectedValueForField(CustomField $field)
    {
        $defaultValue = $field->defaultValue($this->model_id);

        // if old() contains a value for default_values that means
        // the user has submitted the form and we were redirected
        // back with the old input.
        // Let's use what they had previously set.
        if (old('default_values')) {
            $defaultValue = old('default_values.'.$field->id);
        }

        // on first load the default value for checkboxes will be
        // a comma-separated string but if we're loading the page
        // with old input then it was already parsed into an array.
        if ($field->element === 'checkbox' && is_string($defaultValue)) {
            $defaultValue = explode(', ', $defaultValue);
        }

        return $defaultValue;
    }
}
