<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-12">
            <!-- Experience Section-->
            <div class="container overflow-hidden">
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-blue fw-bolder mb-0">Education</h2>
                        <a target="_blank" class="btn btn-primary px-4 py-3" id="CVDownloadLink" href="">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
    
                    <!-- Experience Card 1-->
                    
                    <div id="education-list">

                    </div>
    
                    <!-- Education Card 2-->
                    
                </section>
                <!-- Experience Section-->
                <section>
                    <h2 class="text-blue fw-bolder mb-3">Experience</h2>
                    <!-- Experience Card 1-->

                    
                    <div id="experience-list">

                    </div>
   
            
                </section>
            </div>
            <!-- Divider-->
            <div class="pb-5"></div>
            <!-- Skills Section-->
            <section>
                <!-- Skillset Card-->
                <h2 class="text-blue fw-bolder mb-3 px-2">Languages</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">


                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Resume section
    getResumeLink();
    async function getResumeLink() {
            try {
                let URL="/resumeLink";
                document.getElementById('loading-div').classList.remove('d-none');
                document.getElementById('content-div').classList.add('d-none');
                
                let response = await axios.get(URL);
                let link=response.data['downloadLink'];
                document.getElementById('CVDownloadLink').setAttribute('href',link);
            }
            catch (error) {
                alert(error)
            }
    }

    // Education Section
    eduList();
   async function eduList() {

       try{
           let URL="/educationData";
           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('education-list').innerHTML+=(`<div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">${item['duration']}</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">${item['institutionName']}</div>
                                    </div>
                                    <div class="fst-italic">
                                        <div class="small text-muted">${item['field']}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8"><div>${item['details']}</div></div>
                        </div>
                    </div>
                </div>`)
           })
       }
       catch (error) {
           alert(error)
       }

   }


    // Experience section
    getExpList();
    async function getExpList() {

        try{
            let URL="/experiencesData"
            let response = await axios.get(URL);

            response.data.forEach((item)=>{
                document.getElementById('experience-list').innerHTML+=(`<div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>${item['details']}</div></div>
                            </div>
                        </div>
                    </div>`)


            })




        }catch (error) {
            alert(error)
        }


    }

    // Language section
    LanguageList();
    async function LanguageList() {
       try {
           let URL='/languageData'

           let response = await axios.get(URL);

           document.getElementById('loading-div').classList.add('d-none');
           document.getElementById('content-div').classList.remove('d-none');


           response.data.forEach((item)=>{
                document.getElementById('language-list').innerHTML += (`<div class="col p-2 mb-4 mb-md-0">
                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                       ${item['name']}
                    </div>
                    </div>`
                )
           })

        } catch (error) {
            alert(error);
       }
    }
</script>

