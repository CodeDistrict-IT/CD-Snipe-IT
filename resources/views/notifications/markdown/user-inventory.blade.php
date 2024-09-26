@component('mail::message')

{{ trans('general.reminder_checked_out_items', array('reply_to_name' => config('mail.reply_to.name'), 'reply_to_address' => config('mail.reply_to.address')))}}

@component('mail::table')

@if ($assets->count() > 0)

## {{ $assets->count() }} {{ trans('general.assets') }}

<table width="100%">
    <tr>
        <th align="left">{{ trans('mail.name') }} </th>
        <th align="left">{{ trans('mail.asset_tag') }}</th>
        <th align="left">{{ trans('admin/hardware/table.serial') }}</th> 
        <th align="left">CPU</th>
        <th align="left">RAM/SSD</th>
        <th align="left">Screen Size</th>
        <th></th>
    </tr>
@foreach($assets as $asset)
<tr>
    <td>{{ $asset->present()->name }}</td>
    <td> {{ $asset->asset_tag }} </td>
    <td> {{ $asset->serial }} </td>
    <td> {{ $asset->_snipeit_cpu_4 }} </td>
    <td> {{ $asset->_snipeit_ram_ssd_3 }} </td>
    <td> {{ $asset->_snipeit_screen_size_8 }} </td>
    @if (($snipeSettings->show_images_in_email =='1') && $asset->getImageUrl())
    <td>
        <img src="{{ asset($asset->getImageUrl()) }}" alt="Asset" style="max-width: 64px;">
    </td>
    @endif
</tr>
@endforeach
</table>
@endif

@if ($accessories->count() > 0)
## {{ $accessories->count() }} {{ trans('general.accessories') }}

<table width="100%">
    <tr><th align="left">{{ trans('mail.name') }} </th> <th></th> </tr>
@foreach($accessories as $accessory)
<tr>
    <td>{{ $accessory->name }}</td>
    @if (($snipeSettings->show_images_in_email =='1') && $accessory->getImageUrl())
    <td>
        <img src="{{ asset($accessory->getImageUrl()) }}" alt="Accessory" style="max-width: 64px;">
    </td>
    @endif
</tr>
@endforeach
</table>
@endif

@if ($licenses->count() > 0)
## {{ $licenses->count() }} {{ trans('general.licenses') }}

<table width="100%">
<tr><th align="left">{{ trans('mail.name') }} </th></tr>
@foreach($licenses as $license)
<tr>
    <td>{{ $license->name }}</td>
</tr>
@endforeach
</table>
@endif

@if ($consumables->count() > 0)
## {{ $consumables->count() }} {{ trans('general.consumables') }}

<table width="100%">
<tr><th align="left">{{ trans('mail.name') }} </th> <th></th> </tr>
@foreach($consumables as $consumable)
<tr>
<td>{{ $consumable->name }}</td>
</tr>
@endforeach
</table>
@endif


@endcomponent

Please note that it is your responsibility to ensure the safekeeping of these items, as they are the property of the company. You are allowed to take the equipment home; however, we kindly request that you follow these guidelines:
<ul>
<li>Store the equipment securely when not in use, preferably in a protective case.</li>
<li>Handle the equipment with care during transportation, using a suitable laptop bag or case.</li>
<li>Only use the provided charger or authorized replacements. Avoid using incompatible chargers as they may damage the equipment.</li>
<li>Keep the equipment within your sight and protect it from theft or unauthorized access.</li>
<li>Report any malfunctions, issues, or incidents regarding the equipment immediately to the IT Help Desk or your supervisor.</li>
</ul>

Your compliance with these guidelines will help maintain the equipment's functionality and security, ensuring smooth operations and productivity.

Thank you for your attention to this matter and your commitment to safeguarding our company's assets.</p>
@endcomponent
