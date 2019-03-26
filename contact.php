<?php 
require_once("header.php")
?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Entre em Contato</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
              <li class="active">Contato</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.306698350861!2d-46.47801858494463!3d-23.5214689660055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66d713f7b63d%3A0x8846264f927373e1!2sFATEC!5e0!3m2!1sen!2sbr!4v1531226235370" allowfullscreen></iframe>
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Entre em contato conosco! </h4>



            <form id="contactform" action="" method="post" role="form" class="contactForm">

              <div id="sendmessage">Sua mensagem foi enviada, Obrigado!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 field form-group">
                  <input type="text" name="name" placeholder="* Nome" data-rule="minlen:4" data-msg="Por favor insira seu nome completo" />
                  <div class="validation"></div>
                </div>
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* E-mail" data-rule="email" data-msg="Por favor insira um e-mail válido" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="Mensagem" data-rule="required" data-msg="Por favor insiar a mensagem"></textarea>
                  <div class="validation"></div>

                  <p>
                    <button class="btn btn-color margintop10 pull-left" type="submit">Send message</button>
                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contato<span></span></h5>

                <ul class="contact-info">
                  <!--li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>-->
                  <li><label>Email : </label> contato@dafzl.com.br</li>
                  <li><label>Cel : </label> 11 959 078 724</li>
                  <li><label>Cel : </label> 11 951 739 755</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

<?php 
require_once("footer.php")
?>