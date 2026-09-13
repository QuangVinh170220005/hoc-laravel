@extends('master.master')
@section('content');
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">THÊM CẦU THỦ</h2>
						 <div class="signup-form">
						<form action="/add_cauthu" method="post">
                            @csrf
							<input type="text" placeholder="Tên cầu thu" name="name"/>
							<input type="number" placeholder="Nhập tuổi" name="age"/>
							<input type="text" placeholder="Nhập quốc tịch" name="national"/>
                            <input type="text" placeholder="Nhập vị trí" name="position"/>
                            <input type="number" placeholder="Nhập lương" name="salary"/>
							<button type="submit" class="btn btn-default">Thêm</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
@endsection