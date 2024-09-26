<?php

return [

    'does_not_exist' => 'License does not exist or you do not have permission to view it.',
    'user_does_not_exist' => 'User does not exist or you do not have permission to view them.',
    'asset_does_not_exist' => 'Aset yang hendak di asosiasikan dengan lisensi ini tidak ada.',
    'owner_doesnt_match_asset' => 'Aset yang hendak di asosiasikan dengan lisensi ini di miliki oleh seseorang yang tidak masuk dalam daftar.',
    'assoc_users' => 'Lisensi ini sudah diberikan kepada pengguna dan tidak dapat di hapus. Silahkan cek lisensi terlebih dahulu kemudian coba hapus kembali. ',
    'select_asset_or_person' => 'Anda harus memilih aset atau pengguna, namun tidak keduanya.',
    'not_found' => 'Berkas Lisensi tidak ditemukan',
    'seats_available' => ':seat_count seats available',

    'create' => [
        'error' => 'Gagal membuat lisensi, silahkan coba kembali.',
        'success' => 'Sukses membuat lisensi.',
    ],

    'deletefile' => [
        'error' => 'Berkas belum terhapus. Silahkan coba kembali.',
        'success' => 'Berkas sukses di hapus.',
    ],

    'upload' => [
        'error' => 'Berkas belum terunggah. Silakan coba kembali.',
        'success' => 'Berkas sukses terunggah.',
        'nofiles' => 'Anda belum memilih berkas untuk di unggah, atau berkas yang akan di unggah terlalu besar ukurannya',
        'invalidfiles' => 'Satu atau lebih file Anda terlalu besar atau merupakan jenis filetype yang tidak diizinkan. Filetype yang diperbolehkan adalah png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, dan lic.',
    ],

    'update' => [
        'error' => 'Gagal memperbarui lisensi, silahkan coba kembali',
        'success' => 'Sukses perbarui lisensi.',
    ],

    'delete' => [
        'confirm' => 'Apakah Anda yakin untuk menghapus lisensi ini?',
        'error' => 'Terdapat kesalahan pada saat penghapusan lisensi ini. Silahkan coba kembali.',
        'success' => 'Lisensi telah berhasil dihapus.',
    ],

    'checkout' => [
        'error' => 'Terdapat kesalahan pada saat pemberian lisensi ini. Silahkan coba kembali.',
        'success' => 'Lisensi telah berhasil diberikan',
        'not_enough_seats' => 'Not enough license seats available for checkout',
        'mismatch' => 'The license seat provided does not match the license',
        'unavailable' => 'This seat is not available for checkout.',
    ],

    'checkin' => [
        'error' => 'Terdapat kesalahan pada saat penerimaan lisensi ini. Silahkan coba kembali.',
        'success' => 'Lisensi telah berhasil diterima',
    ],

];
