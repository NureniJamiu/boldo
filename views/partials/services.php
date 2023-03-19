<div class="services-text">
    <h6>Our services</h6>
    <h4>Handshake infographic mass market crowdfunding iteration.</h4>
</div>
<div class="services-images">
    <?php foreach($services as $service) {
        echo "<div>
                <img src=\"".$service['img']."\" alt=\"service-image\">
                <p>{$service["text"]}</p>
                <a href='#'>Explore page ></a>
            </div>";
    };
    ?>
</div>