
@include('home.include.header')
<link rel="stylesheet" href="asset/css/menu.css">

<!-- ==> Section1 <=== -->
<section class="menu">
    <div class="cover">
        <h2>Aw Bismillah !!!</h2>
        <p>Bienvenue sur <span>Douc</span>soft_<span>Learning</span></p>
        <div class="row">
            <a href="format" class="send">Listes des formations</a>
            <a href="about" class="send1">A Propos</a>
        </div>
    </div>
</section>

<!-- ==> Section2 <=== -->
<section class="contain">
    <div class="about">
        <h2 class="title">A Propos de nous!</h2>
        <div class="row1">
            <div class="colonne">
                <img src="asset/img/4k.jpg" alt="">
            </div>
            <div class="colonne">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, rerum quae. Libero debitis
                    voluptas,
                    fuga assumenda cupiditate mollitia alias tempora quasi voluptatibus modi? Quasi harum, ab qui
                    expedita
                    odit nobis cumque numquam provident temporibus inventore, laborum deleniti vel debitis dolores
                    explicabo
                    voluptatibus unde? Quaerat minima nemo sed harum amet aliquam, laboriosam odit error excepturi
                    natus,
                    tempora animi dignissimos pariatur voluptate aperiam ex iste saepe alias expedita. Soluta
                    minima,
                    rem
                    adipisci, aut assumenda nemo perferendis neque magni ipsa aliquid corporis. Animi natus ut rerum
                    dolores
                    incidunt ab ullam officia modi sunt totam. Ipsam eos corrupti maxime? Deserunt consequatur modi
                    nisi
                    maiores?</p>
            </div>
        </div>
    </div>
</section>


<!-- ==> Section3 <=== -->
<section class="contain1">
    <div class="formation">
        <h2 class="title">Nos formations</h2>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card">
                            <img src="asset/img/4k.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title that wraps to a new line</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="asset/img/HD.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title that wraps to a new line</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                    </div>
                          <div class="col">
                            <div class="card">
                                <img src="asset/img/photo.webp" alt="">
                                <div class="card-body">
                                  <h5 class="card-title">Card title that wraps to a new line</h5>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==> Section4 <=== -->
<section class="contain">
    <div class="contact">
        <h2 class="title">Contactez-nous!</h2>
        <div class="row1">
            <div class="colonne">
                <div class="comment-box">
                    <h3>Laissez-nous un message!!!</h3>
                    <form action="" method="mailto:recrutement@doucsoft.tech" class="comment-form">
                        <input type="text" placeholder="Nom..." required>
                        <input type="email" placeholder="Email..." required>
                        <textarea name="" id="" placeholder="Message..."></textarea>
                        <input type="submit" class="submit" value="Envoyer">
                    </form>
                </div>
            </div>
            <div class="colonne">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, rerum quae. Libero debitis
                    voluptas,
                    fuga assumenda cupiditate mollitia alias tempora quasi voluptatibus modi? Quasi harum, ab qui
                    expedita
                    odit nobis cumque numquam provident temporibus inventore, laborum deleniti vel debitis dolores
                    explicabo
                    voluptatibus unde? Quaerat minima nemo sed harum amet aliquam, laboriosam odit error excepturi
                    natus,
                    tempora animi dignissimos pariatur voluptate aperiam ex iste saepe alias expedita. Soluta
                    minima,
                    rem
                    adipisci, aut assumenda nemo perferendis neque magni ipsa aliquid corporis. Animi natus ut rerum
                    dolores
                    incidunt ab ullam officia modi sunt totam. Ipsam eos corrupti maxime? Deserunt consequatur modi
                    nisi
                    maiores?</p>
            </div>
        </div>
    </div>
</section>

<!-- ===> Section4 <=== -->

@include('home.include.footer')
