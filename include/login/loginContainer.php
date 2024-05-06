
<div
        class="row d-flex align-items-center justify-content-center mb-5"
        style="background-color: #ffffff"
      >
        <div class="col-8 border m-5 p-4">
          <p class="h5 arial pb-0">Please Login</p>
          <div class="d-flex justify-content-center">
            <hr class="mt-0" style="width: 100%" />
          </div>
          <label for="username" class="form-label"></label>
          <input
            type="text"
            id="username"
            class="form-control"
            placeholder="Username"
          />

          <div class="input-group mb-5 pb-5 mt-3">
            <label for="inputPassword5" class="form-label"></label>
            <input
              type="password"
              id="inputPassword5"
              class="form-control"
              placeholder="Password"
            />
            <button class="btn border" type="button" id="button-addon2">
              <img src="assets/img/eye.png" alt="" />
            </button>
          </div>
          <div
            class="g-recaptcha ng-pristine ng-untouched ng-valid ng-empty d-flex justify-content-center align-items-center mt-5"
            vc-recaptcha=""
            key="'6LfMphgUAAAAAIljxOLUXxdah7778c-lEdhdCau8'"
            ng-model="gRecaptchaResponse"
            theme="light"
            on-success="recaptcha2.success_login(response)"
            style="
              border: 0px solid #eee;
              text-align: center;
              margin-left: auto;
              margin-right: auto;
              transform: scale(1);
              -webkit-transform: scale(1);
              transform-origin: 0 0;
              display: inline-block;
              -webkit-transform-origin: 0 0;
            "
          >
            <div style="width: 304px; height: 78px">
              <div>
                <iframe
                  title="reCAPTCHA"
                  width="304"
                  height="78"
                  role="presentation"
                  name="a-4ygj0qaly71k"
                  frameborder="0"
                  scrolling="no"
                  sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                  src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LfMphgUAAAAAIljxOLUXxdah7778c-lEdhdCau8&amp;co=aHR0cHM6Ly9kaW9uZS5iYXRzdGF0ZS11LmVkdS5waDo0NDM.&amp;hl=en&amp;v=V6_85qpc2Xf2sbe3xTnRte7m&amp;theme=light&amp;size=normal&amp;cb=czi0xl8ws2js"
                ></iframe>
              </div>
              <textarea
                id="g-recaptcha-response"
                name="g-recaptcha-response"
                class="g-recaptcha-response"
                style="
                  width: 250px;
                  height: 40px;
                  border: 1px solid rgb(193, 193, 193);
                  margin: 10px 25px;
                  padding: 0px;
                  resize: none;
                  display: none;
                "
              ></textarea>
            </div>
            <iframe style="display: none"></iframe>
          </div>
          <div
            class="row d-flex align-items-center justify-content-center mt-5"
          >
          <div class="col-3">
          <a href="index.php">
            <button
              type="button"
              class="btn btn-success rounded-pill"
              style="width: 150px"
              
            >
              Sign in
            </button>
          </a>
          </div>
          </div>
          <div class="d-flex justify-content-center mt-4">
            <hr class="mt-0" style="width: 100%" />
          </div>
          <div class="row d-flex justify-content-start flex-row mb-4">
            <div class="col-3">
              <a href="" style="color: rgb(119, 160, 117)">Forgot Password</a>
            </div>
            <div class="col-3 s">
              <a href="" style="color: rgb(119, 160, 117)">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    
 