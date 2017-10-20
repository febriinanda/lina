@extends('template')

@section('main')
<div id="outletter">
  <h2>Surat Keluar</h2>

  @if (!empty($data))
  <table class="table">
    <thead>
      <tr>
        <th>
          From
        </th>
        <th>
          To
        </th>
        <th>
          Create Date
        </th>
        <th>
          No.
        </th>
        <th>
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $row)
      <tr>
        <td>
          {{ $row->from_who }}
        </td>
        <td>
          {{ $row->to_who }}
        </td>
        <td>
          {{ $row->created_at }}
        </td>
        <td>
          {{ $row->letter_number }}
        </td>
        <td>
          <div class="box-button">
            {{ link_to('outletter/' . $row->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
          </div>
          <div class="box-button">
            {{ link_to('outletter/' . $row->id ."/edit", 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
          </div>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @else
  <p>
    Tidak ada data siswa
  </p>
  @endif

  <div class="table-nav">
    <div class="jumlah-data">
      <strong>Count: {{ $count }}</strong>
    </div>
    <div class="paging">
      {{ $data->links() }}
    </div>
  </div>
  <div class="tombol-nav">
    <div>
        <a class="btn btn-primary" href="{{ url('/')}}">Tambah</a>
    </div>
  </div>
</div>
@stop

@section('footer')
@include('footer')
@stop
