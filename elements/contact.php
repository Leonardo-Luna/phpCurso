<section id="three" class="wrapper style1 fade-up">
    <div class="inner">
        <h2>Get in touch</h2>
        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
        <div class="split style1">
            <section>
                <form>
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="txtName" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="txtEmail" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="txtMessage" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="button" id="btn-submit">Send</button>
                </form>
            </section>
            <section>
                <ul class="contact">
                    <li>
                        <h3>Address</h3>
                        <span>12345 Somewhere Road #654<br />
                        Nashville, TN 00000-0000<br />
                        USA</span>
                    </li>
                    <li>
                        <h3>Email</h3>
                        <a href="#">user@untitled.tld</a>
                    </li>
                    <li>
                        <h3>Phone</h3>
                        <span>(000) 000-0000</span>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    </section>

<script>

(() => {
     
    let btnSubmit = window.document.getElementById("btn-submit");
    btnSubmit.addEventListener("click", () => {
        let name = window.document.getElementById("txtName").value;
        let email = window.document.getElementById("txtEmail").value;
        let message = window.document.getElementById("txtMessage").value;
        
        fetch("contact.php?name=" + name + "&email=" + email + "&message=" + message , {
            method: "GET",
            headers: {
                //Tira error 404 en el header (?)
                "Accept": "application/json",
                "Content-Type": "application/json"
            }
        }).then(e => {
            alert(e);
        });
    });

})();

</script>