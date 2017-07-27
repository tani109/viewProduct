@extends('layouts.app')

@section('content')



<h3 align="center"> <b> Product List </b> </h3> 


<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    position: center;
}
.li1 {
    content: url('img/icon.jpg');

   background:url('img/icon.jpg') 50% 50% no-repeat no-repeat;
   padding-left: 5px;
}
.left_menu{
    width: 30%;
    padding-left: 10px;
}
</style>
<div class="row">
            <?php $i = 10;?> 
            @foreach($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-default">
                           
                            <a href="#{{ $i }}" data-toggle="modal">
                                <div class="panel-footer">
                                    {{$product->product_name}}
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- modal -->
					<div class="modal about-modal fade" id="{{ $i }}" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header"> 
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
										<h4 class="modal-title">{{$product->product_name}}</h4>
								</div> 
								<div class="modal-body">
									<div class="w3ls-about-info">
									
                                        
                                        

										<h4>Category</h4>
										<p>{{$product->category}}</p>
										<h4>Price</h4>
										<p>{{$product->price}}</p>
										
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<!-- //modal -->
                    <?php $i++;?>
            @endforeach

</div>


@endsection