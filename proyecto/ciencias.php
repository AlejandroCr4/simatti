<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion==null || $varsesion = ''){
echo 'Usted no tiene autorizacion';
die();
}

/*
session_start();
if (isset($SESSION['login'])){
echo ' Bienvenido'.$SESSION['login'];
}
else{
echo 'sin sesion';
}
*/
?>

<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="bodie">
<div class="filtro">
<?php include 'view/navbar.php'; ?>
    <div class="container mt-5 pb-5">

        <div class="tarea my-4">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">P.1</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">P.2</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">P.3</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <img class="img-fluid rounded pb-4" src="img/ciencia.jpeg" alt="ciencias">

                    <h5 class="display-4">Ciencias</h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quas mollitia numquam similique impedit ratione, non quaerat consequuntur, velit, nisi soluta quidem laudantium debitis molestias sed cupiditate hic. Et excepturi, id expedita alias deleniti incidunt illum magnam nobis, nulla ducimus sint! Molestiae voluptates nam excepturi? Voluptatem temporibus odio possimus, autem rem quaerat maxime! Aliquam officia amet eaque odio ratione, eos harum nostrum, animi facilis ex iste est neque porro sit aut laudantium exercitationem voluptatem nihil veritatis assumenda reiciendis minus odit. Doloribus odio repellat ab deserunt quidem soluta sed hic explicabo velit voluptas veniam quod, mollitia vitae, blanditiis cupiditate. Commodi placeat laboriosam, in id natus accusantium praesentium ratione est voluptatem, incidunt ipsam amet vel aspernatur itaque sequi. Perferendis sapiente eveniet molestiae similique vel tenetur possimus nemo laudantium voluptatum, iusto minus saepe, delectus nesciunt deserunt tempore, quod laborum non facilis animi. Perspiciatis autem dignissimos tempore provident dolorum, numquam impedit fugiat maxime ipsam incidunt cum, commodi itaque culpa blanditiis fugit tempora temporibus. <br><br>Autem cum aspernatur reiciendis, at iste doloribus quo aliquam eligendi animi quis suscipit quidem accusamus, nostrum temporibus recusandae? Corporis veniam nobis neque cum accusamus, qui quis. Inventore eum optio, aspernatur, odit commodi aut sit pariatur debitis rerum quas blanditiis temporibus magnam est voluptates totam. Modi nihil corporis pariatur nam ipsa deserunt, maxime in consequatur veritatis molestias repellat, repudiandae architecto vero, non, eum recusandae? Beatae cum voluptatem maiores voluptas voluptatibus architecto, ipsa at et odit! Nulla sed distinctio rem consectetur blanditiis, officia! Qui atque maiores natus aperiam obcaecati, similique possimus, distinctio amet quod consectetur cum consequatur magni assumenda nemo dolore, maxime accusamus deserunt ex itaque veritatis debitis. Distinctio placeat quo deserunt quia ullam laborum provident cum, assumenda minus, dicta corporis accusantium tenetur omnis neque officia! Recusandae, aut reprehenderit quaerat eligendi eveniet, debitis nisi dolores provident blanditiis earum quam, perferendis aperiam quas praesentium.
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos incidunt, ex voluptas nisi minus aperiam soluta eveniet odio totam facilis libero sit atque, obcaecati nobis error iusto quo necessitatibus explicabo. Fugit illum totam ullam quod voluptatibus voluptates. Ratione a aperiam laudantium libero eum obcaecati totam, soluta delectus fuga odio sint mollitia nulla molestias. Mollitia voluptas et aut. Corporis excepturi ducimus a eveniet. In ex inventore maxime placeat accusamus dolorem magni eaque eveniet laudantium hic. Autem exercitationem reiciendis earum cupiditate tempore distinctio perferendis atque voluptatibus qui accusantium pariatur, porro iure optio ea voluptates! Aperiam laboriosam laudantium est, corrupti ut excepturi maiores.</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quaerat mollitia, molestiae eveniet, quia cum natus delectus explicabo error, repudiandae officiis cupiditate adipisci maxime amet illo consequuntur accusantium inventore eos ipsa porro quisquam accusamus. Vel nihil eius exercitationem voluptatibus dolor itaque odio quibusdam fugiat, rem, harum officiis aliquam similique dolore error eligendi ipsam tempora repudiandae a tenetur neque autem sit ducimus modi ipsum. Sapiente consequatur voluptate, eos. Numquam aut ullam eaque libero, ut beatae dolores aliquid autem nisi ratione quisquam perferendis error delectus molestiae similique alias pariatur soluta doloribus quibusdam quaerat. Eius voluptas incidunt temporibus! Distinctio, optio repudiandae perspiciatis exercitationem obcaecati. Accusantium, eaque! Soluta perspiciatis incidunt cumque est doloribus maiores nesciunt adipisci cupiditate minus saepe assumenda, repellat laboriosam laudantium amet numquam hic ab optio fugiat ut consequuntur ullam praesentium qui reiciendis dolorum? Ut, aut culpa quae. Modi nisi commodi minus, fugit voluptatibus aut assumenda earum dolores voluptate totam molestias vero quaerat atque libero enim, blanditiis, asperiores, rem dolorum sequi nemo deserunt. Suscipit cumque natus assumenda quia et soluta magni iure eveniet ipsa! Doloribus dolorem adipisci ad rerum quo modi, qui dolore sunt aspernatur magni ex nam neque eveniet, quisquam error eaque, aut sapiente repudiandae labore soluta dolor. Possimus, architecto, enim?</div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'view/foot.php'; ?>
</body>

</html>