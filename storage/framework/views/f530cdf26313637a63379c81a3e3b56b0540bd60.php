<style>
    .blog-banner {
        height: 300px;
    }

    .blog-banner img {
        height: 300px;
        object-fit: 100%;
        object-position: center;
    }

    .thumbnail-blog {
        height: 150px;
        overflow: hidden;
        border-radius: 5px 5px 0 0;
    }

    .thumbnail-blog img {
        height: 150px;
        object-fit: cover;
        object-position: center;
        transition: all 0.3s;
    }

    .comment-list {
        max-height: 400px;
        overflow: auto;
    }
</style>



<?php $__env->startSection('title', 'Blogs - Cat Shelter'); ?>

<?php $__env->startSection('banner'); ?>
    <div class="blog-banner">
        <img src="https://cataas.com/cat?type=<?php echo e($id); ?>" alt="banner" class="w-100">
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="blog-category fw-light text-muted">
                    <div class="badge bg-secondary fw-light">Category</div>
                    <i class="bi bi-calendar me-1"></i> 24 July 2022
                </div>
                <div class="cat-desc mt-3">
                    <h4 class="mb-3">Lorem ipsum dolor sit amet consectetur</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolor sunt laborum
                        explicabo sapiente, repellendus, sint esse eligendi eaque odio tenetur dolores dolorum
                        porro
                        suscipit et, neque vitae officia laudantium! Lorem ipsum, ...</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi perferendis earum dolorem porro
                        molestias expedita quaerat enim veritatis, laudantium, officiis harum sit nemo officia facere
                        numquam delectus voluptatum exercitationem ea. Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Tenetur fugit nulla ipsa nesciunt, deserunt ut pariatur eveniet, soluta aliquid et obcaecati
                        harum vero nostrum ducimus, sint eius est sequi inventore Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis minima eum sint magnam culpa voluptatum illo, perspiciatis et dolore
                        esse nisi molestias quas aliquid, commodi voluptates cum sed, maiores obcaecati. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Velit unde repudiandae ducimus accusamus nemo dolores fugiat
                        obcaecati tempore, explicabo provident enim delectus eos sint quod optio quis, perspiciatis dicta
                        aut!</p>
                </div>
                <hr>
            </div>
        </div>

        
        <div class="row justify-content-center my-4 mb-5">
            <div class="col-md-9 my-3">
                <h3 class="text-center mb-3">Another Interesting Blog</h3>
                <section class="splide" id="blogs" aria-label="Splide Basic HTML Example">
                    <div class="splide__track px-2">
                        <ul class="splide__list">
                            <?php for($i = 1; $i < 8; $i++): ?>
                                <li class="splide__slide">
                                    <div class="card border-0 shadow">
                                        <div class="thumbnail-blog">
                                            <img src="https://cataas.com/cat?type=<?php echo e($i); ?>" alt="blog"
                                                class="w-100">
                                        </div>
                                        <div class="card-body pt-1">
                                            <div class="blog-category fw-light text-muted">
                                                <div class="badge bg-secondary fw-light">Category</div>
                                                <i class="bi bi-calendar me-1"></i> 24 July 2022
                                            </div>
                                            <div class="cat-desc mt-3">
                                                <h4 class="mb-3">Lorem ipsum dolor sit amet consectetur</h4>
                                                <small class="text-muted">Lorem ismallsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit.
                                                    Dignissimos dolor sunt
                                                    laborum
                                                    explicabo sapiente, repellendus, sint esse eligendi eaque odio tenetur
                                                    dolores
                                                    dolorum
                                                    porr...</small>
                                            </div>
                                            <a href="/blogs/1" class="btn btn-sm button-primary mt-3">Detail</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        
        <div class="row justify-content-center my-4 mb-5">
            <div class="col-md-9">
                <div class="comment-form">
                    <h5>Comments</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="name" class="text-muted">Name</label>
                            <input type="text" name="" class="form-control" id='name'>
                        </div>
                        <div class="col-6">
                            <label for="email" class="text-muted">Email</label>
                            <input type="email" email="" class="form-control" id='name'>
                        </div>
                        <div class="col-12">
                            <label for="comment" class="text-muted">Comment</label>
                            <textarea name="" id="comment" class="form-control" rows="6"></textarea>

                            <button class="btn btn-sm btn-secondary rounded-pill px-3 mt-3" type="submit"><i
                                    class="bi bi-envelope-paper me-1"></i>
                                Submit</button>
                        </div>
                    </div>
                </div>
                <div class="comment-list mt-4">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <div class="comment-user">
                            <div class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="bi bi-person-circle text-muted" style="font-size: 2rem"></i>
                                </div>
                                <div class="user ms-2 text-muted">
                                    Username <br>
                                    <div style="font-size: .8em">24 July 2022</div>
                                </div>
                            </div>
                            <p class="text-muted mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nostrum
                                exercitationem
                                esse neque repellat quasi deserunt culpa nisi quia voluptatibus facilis soluta eius,
                                corrupti
                                ratione saepe harum explicabo! Minima, voluptatibus.
                            </p>
                            <hr>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        new Splide('#blogs', {
            perPage: 2,
            gap: 20,
            arrows: false,
        }).mount();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/blogs-detail.blade.php ENDPATH**/ ?>