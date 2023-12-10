<header class="py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-6">
                <div class="text-center text-xxl-start banner_head">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase" id="keyLine"></div></div>
                    <h1 class="display-3 fw-bolder"><span class="text-gradient d-inline" id="title">I'm Tanvir Chowdhury</span></h1>
                    <h3 class="display-3 fw-bolder mb-3"><span class="text-gradient d-inline" id="short_title">Web Application Developer</span></h3>
                    <p class="fw-bolder mb-5">I'm a Web Developer with a passion for Programming. Transforming ideas into captivating is my expertise, and I thrive on bringing innovative concepts to life.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                        <a class="head_btn btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/resume')}}">Resume</a>
                        <a class="btn_right btn-lg px-5 py-3 fs-6 fw-bolder" href="{{url('/projects')}}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" id="profileImg" src="{{url('https://iili.io/JTY9Mns.png')}}" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    getHero();
    async function getHero() {
 
        try {
            let URL="/heroData"
 
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
  
            let response = await axios.get(URL);

            document.getElementById('keyLine').innerHTML=response.data['keyLine'];
            document.getElementById('short_title').innerHTML=response.data['short_title'];
            document.getElementById('title').innerHTML=response.data['title'];
            document.getElementById('profileImg').src=response.data['img'];
        }
        catch (error) {
            alert(error);
        }
 
    }
    
 
 </script>