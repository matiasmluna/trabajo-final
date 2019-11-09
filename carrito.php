<?php

require_once 'funciones/funciones.php';

require_once 'partials/header.php';

require_once 'partials/navbar.php';

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <?php require_once 'partials/header.php' ?>
    <?php require_once 'partials/navbar.php' ?>
  </head>

  <body>

      <div class="emptyspace"></div>
      <div class="container">
        <div class="card">
          <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
              <tr>
                <th scope="col">Productos</th>
                <th scope="col" width="120">Cantidad</th>
                <th scope="col" width="120">Precio</th>
                <th scope="col" width="200" class="text-right">Acción</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                	<td>
                    <figure class="media">
                    	 <div id="imagen-carrito" class="img-wrap">
                         <img src="images/adidas2.png" class="img-thumbnail img-sm">
                       </div>
                    	 <figcaption class="media-body">
                      		<h6 class="title text-truncate">BOTINES ADIDAS
                          </h6>
                      		<dl class="dlist-inline small">
                      		  <dt>Talle:</dt>
                      		  <dd>42</dd>
                      		</dl>
                      		<dl class="dlist-inline small">
                      		  <dt>Color: </dt>
                      		  <dd>Rosa</dd>
                      		</dl>
                    	  </figcaption>
                    </figure>
                	</td>
                	<td>
                		<select class="form-control">
                			<option>1</option>
                			<option>2</option>
                			<option>3</option>
                			<option>4</option>
                		</select>
                	</td>
                	<td>
                		<div class="price-wrap">
                			<var class="price">$5,490.00</var>
                		</div> <!-- price-wrap .// -->
                	</td>
                	<td class="text-right">
                	<a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                	<a href="" class="btn btn-outline-danger"> × Eliminar</a>
                	</td>
              </tr>

              <tr>
                	<td>
                    <figure class="media">
                    	 <div id="imagen-carrito" class="img-wrap">
                         <img src="images/adidas2.png" class="img-thumbnail img-sm">
                       </div>
                    	 <figcaption class="media-body">
                      		<h6 class="title text-truncate">BOTINES ADIDAS
                          </h6>
                      		<dl class="dlist-inline small">
                      		  <dt>Talle:</dt>
                      		  <dd>42</dd>
                      		</dl>
                      		<dl class="dlist-inline small">
                      		  <dt>Color: </dt>
                      		  <dd>Rosa</dd>
                      		</dl>
                    	  </figcaption>
                    </figure>
                	</td>
                	<td>
                		<select class="form-control">
                			<option>1</option>
                			<option>2</option>
                			<option>3</option>
                			<option>4</option>
                		</select>
                	</td>
                	<td>
                		<div class="price-wrap">
                			<var class="price">$5,490.00</var>
                		</div> <!-- price-wrap .// -->
                	</td>
                	<td class="text-right">
                	<a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                	<a href="" class="btn btn-outline-danger"> × Eliminar</a>
                	</td>
              </tr>

              <tr>
                	<td>
                    <figure class="media">
                    	 <div id="imagen-carrito" class="img-wrap">
                         <img src="images/adidas2.png" class="img-thumbnail img-sm">
                       </div>
                    	 <figcaption class="media-body">
                      		<h6 class="title text-truncate">BOTINES ADIDAS
                          </h6>
                      		<dl class="dlist-inline small">
                      		  <dt>Talle:</dt>
                      		  <dd>42</dd>
                      		</dl>
                      		<dl class="dlist-inline small">
                      		  <dt>Color: </dt>
                      		  <dd>Rosa</dd>
                      		</dl>
                    	  </figcaption>
                    </figure>
                	</td>
                	<td>
                		<select class="form-control">
                			<option>1</option>
                			<option>2</option>
                			<option>3</option>
                			<option>4</option>
                		</select>
                	</td>
                	<td>
                		<div class="price-wrap">
                			<var class="price">$5,490.00</var>
                		</div> <!-- price-wrap .// -->
                	</td>
                	<td class="text-right">
                	<a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                	<a href="" class="btn btn-outline-danger"> × Eliminar</a>
                	</td>
              </tr>

            </tbody>
          </table>
        </div> <!-- card.// -->
        </div>
        <div class="emptyspace"></div>

    <?php require_once 'partials/footer.php'; ?>

  </body>
</html>
