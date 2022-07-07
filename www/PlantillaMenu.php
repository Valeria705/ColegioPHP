
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Alumno"){ViewContext.Writer.Write("active");}" href="AlumnosSelect.php">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Curso"){ViewContext.Writer.Write("active");}" href="CursosSelect.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Docente"){ViewContext.Writer.Write("active");}" href="DocentesSelect.php">Docentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Especialidad"){ViewContext.Writer.Write("active");}" href="EspecialidadesSelect.php">Especialidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Oficina"){ViewContext.Writer.Write("active");}" href="OficinasSelect.php">Oficinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(ViewBag.Menu=="Aula"){ViewContext.Writer.Write("active");}" href="AulasSelect.php">Aulas</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container body-content" style="margin-top:80px">