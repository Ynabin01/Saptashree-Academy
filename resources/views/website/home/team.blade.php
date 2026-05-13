<!-- =========================
TEAM HEADER
========================= -->
<div class="col-12 mb-5 text-center" data-aos="fade-up" data-aos-duration="1200">
    <h2 class="mv-section-title">
        <span class="mission">Meet Our</span>
        <span class="vision">Expert</span>
        <span class="values">Team</span>
    </h2>
</div>

<!-- =========================
TEAM SECTION
========================= -->
<div class="container nh-team-container py-5">
    <div class="row g-4 justify-content-center">

        @foreach($goal as $member)
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">

            <div class="nh-team-card">

                <div class="nh-team-photo"
                    style="background-image:url('{{ $member->banner_image ?? '/website/img/default-profile.png' }}');">

                    <div class="overlay"></div>

                   <div class="nh-team-content" >

                        <p class="nh-team-role" style="color: #fff;">{{ $member->caption ?? '' }}</p>

                        <h5 class="nh-team-name" style="color: #fff;">
                            {!! htmlspecialchars_decode($member->short_content ?? '') !!}
                        </h5>

                        <div class="nh-team-socials">
                            <a href="{{ $member->fb_link ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $member->twit_link ?? '#' }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $member->link_link ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <button class="view-btn">View Profile</button>

                        <div class="nh-team-long-content d-none">
                            {!! htmlspecialchars_decode($member->long_content ?? '') !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>
        @endforeach

    </div>
</div>

<!-- =========================
MODAL
========================= -->
<div id="teamMessageModal" class="team-message-modal">

    <div class="modal-overlay"></div>

    <div class="modal-content">

        <button class="modal-close">&times;</button>

        <img src="" class="modal-photo" alt="">

        <h2 class="modal-name"></h2>
        <p class="modal-role"></p>

        <div class="modal-message"></div>
    </div>
</div>

<!-- =========================
CSS
========================= -->
<style>

/* CARD */
.nh-team-card{
    width:100%;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
    transition:0.3s;
    cursor:pointer;
}

.nh-team-card:hover{
    transform:translateY(-8px);
}

.nh-team-photo{
    height:320px;
    background-size:cover;
    background-position:center;
    position:relative;
}

.overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(0,0,0,0.7), transparent);
}

.nh-team-content{
    position:absolute;
    bottom:0;
    padding:15px;
    color:#fff;
    width:100%;
    text-align:center;
}

.nh-team-name{font-size:16px;font-weight:700;}
.nh-team-role{font-size:13px;opacity:0.9;}

.view-btn{
    margin-top:8px;
    padding:5px 12px;
    border:none;
    border-radius:20px;
    background:#ff4d4d;
    color:#fff;
    font-size:12px;
    cursor:pointer;
}

/* MODAL */
.team-message-modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.6);
    justify-content:center;
    align-items:center;
    z-index:99999;
}

.team-message-modal.active{
    display:flex;
}

.modal-content{
    background:#fff;
    width:90%;
    max-width:650px;
    padding:25px;
    border-radius:15px;
    text-align:center;
    position:relative;
}

.modal-close{
    position:absolute;
    right:10px;
    top:10px;
    border:none;
    width:32px;
    height:32px;
    border-radius:50%;
    cursor:pointer;
}

.modal-photo{
    width: 120px;
    height: 120px;
    /* border-radius: 50%; */
    /* object-fit: cover; */
    margin-bottom: 10px;
    margin-left: 40%;
}

.modal-name{font-size:22px;margin:0;}
.modal-role{color:#e63946;margin:5px 0;}

.modal-message{
    font-size:14px;
    margin-top:10px;
    max-height:200px;
    overflow:auto;
}

.modal-socials a{
    margin:0 8px;
    color:#333;
    text-decoration:none;
}

</style>

<!-- =========================
JS (WORKING)
========================= -->
<script>

document.addEventListener("DOMContentLoaded", function () {

    const modal = document.getElementById("teamMessageModal");
    const closeBtn = document.querySelector(".modal-close");
    const overlay = document.querySelector(".modal-overlay");

    // OPEN MODAL
    document.querySelectorAll(".view-btn").forEach(btn => {

        btn.addEventListener("click", function (e) {
            e.stopPropagation();

            const card = this.closest(".nh-team-card");

            const img = card.querySelector(".nh-team-photo").style.backgroundImage;
            const cleanImg = img.replace('url("','').replace('")','').replace("url('","").replace("')","");

            modal.querySelector(".modal-photo").src = cleanImg;
            modal.querySelector(".modal-name").innerText = card.querySelector(".nh-team-name").innerText;
            modal.querySelector(".modal-role").innerText = card.querySelector(".nh-team-role").innerText;
            modal.querySelector(".modal-message").innerText = card.querySelector(".nh-team-long-content").innerText;

            modal.classList.add("active");
        });

    });

    // CLOSE MODAL
    closeBtn.onclick = () => modal.classList.remove("active");
    overlay.onclick = () => modal.classList.remove("active");

});

</script>