<!-- Footer-->
<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="m-0">Copyright &copy; Tanvir Chowdhury 2023</div></div>
            <div class="col-auto">
                <div class="d-flex fs-2 gap-4">
                    <a href="{{url('https://www.linkedin.com/in/tanvirchowdhury1/')}}" target="_blank" id="linkedin" class="text-gradient " href=""><i class="bi bi-linkedin "></i></a>
                    <a href="{{url('https://github.com/Tanvirdevelope')}}" target="_blank" id="github" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    <a href="{{url('mailto:tanvirchowdhury698@gmail.com')}}" target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-envelope"></i></a>
                    <a href="{{url('/')}}" target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                    <a href="{{url('/')}}" target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    const navToggle = document.querySelector(".nav-toggle");
    const links = document.querySelector(".links");

    navToggle.addEventListener("click", function () {

    links.classList.toggle("show-links");
    });
    
  </script>