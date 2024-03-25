<table>
    <thead>
    <tr>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">No</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Nama</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Asal Kelas</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Pilihan Paket</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Jurusan Kelas</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Pilihan Kelas</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Kampus Tujuan</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Fakultas Tujuan</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Alasan</th>
        <th style="font-family: calibri; font-size: 12px; text-align: center; border: 1px solid black; background-color: yellow;">Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
    @foreach($data as $item)
        <tr>
            <td style="border: 1px solid black;">{{ $no++ }}</td>
            <td style="border: 1px solid black;">{{ $item->nama }}</td>
            <td style="border: 1px solid black;">{{ $item->asal_kelas }}</td>
            <td style="border: 1px solid black;">{{ $item->paket->nama_paket }}</td>
            <td style="border: 1px solid black;">{{ $item->paket->jurusan->nama_jurusan }}</td>
            <td style="border: 1px solid black;">{{ $item->paket->nama_kelas }}</td>
            <td style="border: 1px solid black;">{{ $item->kampus_tujuan }}</td>
            <td style="border: 1px solid black;">{{ $item->fakultas_tujuan }}</td>
            <td width="90%" style="border: 1px solid black;">{{ $item->alasan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
