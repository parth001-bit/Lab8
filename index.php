<?php include 'includes/header.php'; ?>

<main>
  <div class="container mt-5">
    <div class="d-flex justify-content-end mb-4">
      <div class="btn-group me-2">
        <button class="btn btn-secondary btn-sm" data-bs-theme-value="dark">Dark</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-light btn-sm" data-bs-theme-value="light">Light</button>
      </div>
    </div>

    <h1 class="mb-4">Animals</h1>

    <div class="row mb-4">
      <div class="col-md-4">
        <input
          type="text"
          class="form-control form-control-lg"
          placeholder="Search Animals"
        />
      </div>

      <div class="col-md-8 user-menu d-flex justify-content-end align-items-center">
        <ul class="nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Adaptations</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-bg-primary rounded-3">Behavior</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Conservation</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Diversity</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3 text-center p-3">
          <img
            src="pics/penguins.jpg"
            alt="Penguins"
            class="img-fluid rounded-circle picture-size mx-auto"
          />
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 text-center p-3">
          <img
            src="pics/puppies.webp"
            alt="Puppies"
            class="img-fluid rounded-circle picture-size mx-auto"
          />
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 text-center p-3">
          <img
            src="pics/cat.jpg"
            alt="Cat"
            class="img-fluid rounded-circle picture-size mx-auto"
          />
        </div>
      </div>
    </div>

    <h2 class="mt-4 mb-3">This is the main content of Lab 7</h2>

    <?php include 'php/behavior.php'; ?>

    <div class="container mt-4">
      <a href="php/viewrecords.php" class="btn btn-info w-100">View Records</a>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>