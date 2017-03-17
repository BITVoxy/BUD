<footer class="footer-demo section-dark">
        <div class="container">
            <nav class="pull-left">
                <ul>    
                    <li>
                        <a href="{{ Flight::request()->base }}">
                            <img src="logo.png" height="45" width="45" class="img-responsive" title="{{ Flight::get('brand') }}">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; Copyright {{ date('Y') }} BITVoxy. Powered By <a href="#">Bud Micro Framework Stack</a> , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
            </div>
        </div>
    </footer>