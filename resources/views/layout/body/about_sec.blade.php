<section class="bg-light py-5">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">About Me</span></h1>
        </div>
        <div class="row gx-3 justify-content-center">

            <div class="col-xxl-7 pt-3">
                <div class="d-flex mt-xxl-0">
                    <div class="about">
                        <img class="about_img" id="" src="assets/img/about.svg" alt="..." />
                    </div>
                </div>
            </div>

            <div class="col-xxl-5">
                <div class="">
                    <h5 id="about-title" class="text-gradient my-3 fw-bolder">Web Application Developer</h5>
                    <p id="about-des" class="text-muted">I'm Tanvir Chowdhury, a seasoned web developer with a relentless curiosity for crafting digital experiences that go beyond the ordinary. I specialize in PHP & Laravel. Transforming design concepts into responsive and visually stunning websites using HTML, CSS, and JavaScript. Building scalable and efficient server-side applications with PHP. Creating seamless, intuitive interfaces that engage users and elevate their online journey.</p>
                    
                    <div class="d-flex fs-2 gap-4">
                        <a href="{{url('https://www.linkedin.com/in/tanvirchowdhury1/')}}" target="_blank" id="linkedin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a href="{{url('https://github.com/Tanvirdevelope')}}" target="_blank" id="github" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                        <a href="{{url('mailto:tanvirchowdhury698@gmail.com')}}" target="_blank" id="email" class="text-gradient" href=""><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>

    GetAboutDetail();
    async function GetAboutDetail() {
        try{
            let URL="/aboutData"
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            let response=await axios.get(URL);
            document.getElementById('about-title').innerHTML=response.data.title;
            document.getElementById('about-des').innerHTML=response.data.details;

        }
        catch (error) {
            alert(error)
        }
    }


    getSocialLink()
    async function getSocialLink() {
        try {
            let URL="/socialData"
            let response=await axios.get(URL);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('email').href=response.data['emailLink'];
            document.getElementById('linkedin').href=response.data['linkedinLink'];
            document.getElementById('github').href=response.data['githubLink'];
        }
        catch (error) {
            alert(error)
        }
    }
    

</script>