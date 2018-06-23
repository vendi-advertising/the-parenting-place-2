<?php 
$cards = $value;
if($cards) : ?>

<div class="row">

    <div class="col-md-12">
        <?php foreach( $cards as $card ): ?>
            <div class="card">
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col-12">
                            <h3>Sponsor</h3>
                            <img src="//unsplash.it/400x200" class="img-fluid">
                            <hr>
                            <p class="">Shiny, shiny. Varius azdipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Ovi lipsim diro?</p>
                            <button class="btn btn-secondary">Take Action!</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- /.col-md-12 -->
</div>
<!-- /.row -->
<?php endif; ?>