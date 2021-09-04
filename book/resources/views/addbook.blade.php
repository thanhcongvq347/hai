<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm sách</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body>
<form method="POST" action="{{URL::to('/luusach')}}">
	@csrf
<div class="form-group">
<label for="exampleInputEmail1">Nhập tên sách</label>
<input type="text" name="ten" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </div>
<div class="form-group">
<label for="exampleInputPassword1">Nhập tác giả</label>
<input type="text" name="tacgia" class="form-control" id="exampleInputPassword1" placeholder="tacgia" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Nhập nội dung</label>
<input type="text" name="noidung" class="form-control" id="exampleInputPassword1" placeholder="noidung">

</div>

 <button type="submit" class="btn btn-primary">Thêm</button>
</form>
</body>
</html>