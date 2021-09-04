@foreach($data as $key => $value)

{{$value->ten_sach}}
<a href="{{URL::to('/hienthisach/' . $value->id)}}">sửa</a>
<a href="{{URL::to('/xoasach/' . $value->id)}}">xóa</a>
</br>
@endforeach