<section id="contact" class="get-started">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-capitalize">Contacto</h1>
            <div class="heading-line"></div>
            <p class="lh-lg">
                ¡Contáctanos ahora y déjanos ayudarte!
            </p>
        </div>

        <!-- START THE CTA CONTENT  -->
        <div class="row text-white">
            <div class="col-12 col-lg-6 gradient shadow p-3">
                <div class="cta-info w-100">
                    <h4 class="display-4 fw-bold">Garantía de satisfacción</h4>
                    <p class="lh-lg">
                    Tu felicidad es nuestra prioridad. Si no estás completamente satisfecho con nuestros productos o servicios, 
                    trabajaremos incansablemente para hacerlo bien. Tu tranquilidad es nuestra promesa. 
                </p>
                    <h3 class="display-3--brief">Nos caracteriazamos en</h3>
                    <ul class="cta-info__list">
                        <li>1. Precisión.</li>
                        <li>2. Seguridad.</li>
                        <li>3. Agilidad.</li>
                    </ul>
                    <h3 class="display-3--brief">Hablemos ahora sobre tu proyecto</h3>
                    <button type="button" class="rounded-pill btn-rounded border-primary">¡Conectarnos ahora!
                        <a aria-label="Chat on WhatsApp" href="https://wa.me/573015606006" target="_blank"> <img alt="Chat on WhatsApp" src="images/logoEagle.png" width="30px" /></a>

                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow p-3">
                <div class="form w-100 pb-2">
                    <h4 class="display-3--title mb-5">Inicia tu proyecto</h4>
                    <form class="row" id="form">
                        <div class="col-lg-6 col-md mb-3">
                            <input type="text" placeholder="Nombre completo" name="nombre" class="shadow form-control form-control-lg" required="true">
                        </div>
                        <div class="col-lg-6 col-md mb-3">
                            <input type="number" placeholder="Número whatsapp" name="telefono" class="shadow form-control form-control-lg" required="true">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="email" placeholder="Correo electrónico" name="email" class="shadow form-control form-control-lg" required="true">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea type="text" placeholder="Mensaje" name="texto" rows="8" class="shadow form-control form-control-lg" required="true"></textarea>
                        </div>
                        <div class="text-center d-grid mt-1">
                            <input type="submit" id="button" value="Enviar mensaje" class="btn btn-primary rounded-pill pt-3 pb-3">

                        </div>
                    </form>
               
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                    <script type="text/javascript">
                        emailjs.init('vqMJawKvtp94pyo-r')
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const btn = document.getElementById('button');

    document.getElementById('form')
        .addEventListener('submit', function(event) {
            event.preventDefault();

            btn.value = 'Enviando...';

            const serviceID = 'default_service';
            const templateID = 'template_2xq19oi';

            emailjs.sendForm(serviceID, templateID, this)
                .then(() => {
                    btn.value = 'Enviar mensaje';
                    alert('Mensaje enviado con éxito!');
                    document.getElementById('form').reset();
                }, (err) => {
                    btn.value = 'Enviar mensaje';
                    alert(JSON.stringify(err));
                });
        });
</script>