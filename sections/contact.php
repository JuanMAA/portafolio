<section id="contacto" class="gray_bg section_padding">
    <div class="container">
        <div class="col-md-12 col-sm-12-col-xs-12">
            <div class="section_heading text-center">
                <h2>Contáctame</h2>
                <div class="sm_border section_bg_<?php echo $random_number ?>"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-24 col-sm-24">
                <form id="contact-form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input_padding text-center">
                            <div class="form-group col-sm-12">
                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Nombre *" required="required">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Correo *" required="required">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto *" required="required">
                            </div>
                            <div class="form-group col-sm-12 mab-none">
                                <textarea rows="8" name="message" class="form-control" id="description" placeholder="Escribe tu mensaje aqui ..." required="required"></textarea>
                            </div>
                            <div class="form-group mb0 col-sm-6">
                                <div class="actions">
                                    <button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg main_btn btn_shadow" title="Submit Your Message!">Enviar
                                        Mensaje</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--
				<div class="col-md-5 col-sm-12">
					<div class="contact_widget_area">

						<div class="contact_info">
							<i class="fa fa-phone"></i>
							<div class="contact_info_text">
								<h5>N° Telefonico</h5>
								<p>+56 9 50367065</p>
							</div>
						</div>

						<div class="contact_info">
							<i class="fa fa-envelope"></i>
							<div class="contact_info_text">
								<h5>Correo Electronico</h5>
								<p>juanmansillaasenjo@gmail.com</p>
								<p>juanmansillasenjo@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
				-->
        </div>
    </div>
</section>