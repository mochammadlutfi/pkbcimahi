@component('mail::message')

Terimakasih Sudah Mendaftar. Klik Tombol Dibawah Untuk Melakukan Konfirmasi Email

@component('mail::button', ['url' => $url])
Verifikasi Email
@endcomponent


Hormat Kami,<br>
{{ settings()->get('app_name') }}
<hr>
<p>Jika Anda mengalami kesulitan mengklik tombol "Verifikasi Alamat Email", salin dan tempel URL di bawah ini ke browser web Anda : <?= $url; ?></p>
@endcomponent
