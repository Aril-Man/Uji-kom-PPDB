<title>Cetak Laporan Data Peserta</title>

<h1 class="text-center">SMK Wikrama Bogor</h1>
<br>
<p>No Registrasi : {{ $pesertas->noreg }}</p>
<p>Nama : {{ $pesertas->nama }}</p>
<p>Jenis Kelamin : {{ $pesertas->jk }}</p>
<p>Alamat : {{ $pesertas->alamat }}</p>
<p>Agama : {{ $pesertas->agama }}</p>
<p>Asal Smp : {{ $pesertas->asal_sekolah }}</p>
<p>Minat Jurusan: {{ $pesertas->jurusan }}</p>


<script type="text/javascript">
    window.print();
</script>
