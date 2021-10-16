<table>
  <thead>
    <tr>
      <th><b>NOMER PENDAFTAR</b></th>
      <th><b>PROGRAM KEAHLIAN</b></th>
      <th><b>NAMA</b></th>
      <th><b>TEMPAT LAHIR</b></th>
      <th><b>TANGGAL LAHIR</b></th>
      <th><b>JENIS KELAMIN</b></th>
      <th><b>ALAMAT</b></th>
      <th><b>KECAMATAN</b></th>
      <th><b>KABUPATEN</b></th>
      <th><b>NOMER HP</b></th>
      <th><b>NISN</b></th>
      <th><b>ASAL SEKOLAH</b></th>
      <th><b>NAMA AYAH</b></th>
      <th><b>PEKERJAAN AYAH</b></th>
      <th><b>NAMA IBU</b></th>
      <th><b>PEKERJAAN IBU</b></th>
      <th><b>NOMER HP ORTU</b></th>
      <th><b>ALAMAT ORTU</b></th>
      <th><b>KECAMATAN ORTU</b></th>
      <th><b>KABUPATEN ORTU</b></th>
      <th><b>HAFALAN</b></th>
      <th><b>LULUSAN MUH</b></th>
      <th><b>LULUSAN SAUDARA</b></th>
      <th><b>KEJUARAAN</b></th>
      <th><b>STATUS PENDAFTARAN</b></th>
    </tr>
  </thead>
  <tbody>
    @foreach($siswa as $data)
    <tr>
      <td>{{ $data->nomer_pendaftar }}</td>
      <td>{{ $data->program_keahlian }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->tempat_lahir }}</td>
      <td>{{ $data->tanggal_lahir }}</td>
      <td>{{ $data->jenis_kelamin }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->kecamatan }}</td>
      <td>{{ $data->kabupaten }}</td>
      <td>{{ $data->nomer_hp }}</td>
      <td>{{ $data->nisn }}</td>
      <td>{{ $data->asal_sekolah }}</td>
      <td>{{ $data->nama_ayah }}</td>
      <td>{{ $data->pekerjaan_ayah }}</td>
      <td>{{ $data->nama_ibu }}</td>
      <td>{{ $data->pekerjaan_ibu }}</td>
      <td>{{ $data->nomer_hp_ortu }}</td>
      <td>{{ $data->alamat_ortu }}</td>
      <td>{{ $data->kecamatan_ortu }}</td>
      <td>{{ $data->kabupaten_ortu }}</td>
      <td>{{ $data->hafalan }}</td>
      <td>{{ $data->lulusan_muh }}</td>
      <td>{{ $data->saudara }}</td>
      <td>{{ $data->kejuaraan }}</td>
      <td>{{ $data->status ? 'Sudah Bayar' : 'Belum Bayar' }}</td>
    </tr>
    @endforeach
  </tbody>
</table>