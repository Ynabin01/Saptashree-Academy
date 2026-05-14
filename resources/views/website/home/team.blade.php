<!-- =========================
TEAM HEADER
========================= -->
<div class="col-12 mb-4 text-center" data-aos="fade-up" data-aos-duration="1200">
     
    <div class="text-center mb-5" data-aos="fade-up" style="margin-top: 40px;">
            <div class="tag">Our Teachers Team</div>
<br>
<br>
            <h2 class="title">
                 <span> Meet Our Expert Team</span>
            </h2>
            <p class="sub">
                Insights, stories and updates from our learning community
            </p>
        </div>
</div>

<!-- =========================
TEAM SECTION
========================= -->
<div class="container py-4">

    <!-- TEAM GRID -->
    <div class="team-wall" id="teamWall">

        @foreach($goal as $member)

        <div class="team-item team-card">

            <div class="team-photo"
                style="background-image:url('{{ $member->banner_image ?? '/website/img/default-profile.png' }}');">

                <div class="team-overlay"></div>

                <div class="team-content">

                    <p class="role">{{ $member->caption ?? '' }}</p>

                    <h5 class="name">
                        {!! htmlspecialchars_decode($member->short_content ?? '') !!}
                    </h5>

                    <button class="view-btn">View Profile</button>

                    <div class="long-content d-none">
                        {!! htmlspecialchars_decode($member->long_content ?? '') !!}
                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <!-- SHOW MORE BUTTON (MOBILE ONLY) -->
    <div class="team-more-wrap">
        <button id="toggleTeam" class="team-more-btn">
            Show More Team
        </button>
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

/* GRID */
.team-wall{
    display:grid;
    grid-template-columns: repeat(6, 1fr);
    gap:10px;
}

/* CARD */
.team-item{
    width:100%;
}

/* FULL IMAGE CARD */
.team-photo{
    height:240px;
    background-size:cover;
    background-position:center;
    border-radius:14px;
    overflow:hidden;
    position:relative;
    transition:0.3s ease;
}

.team-photo:hover{
    transform:scale(1.03);
}

/* OVERLAY */
.team-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(0,0,0,0.75), transparent 60%);
}

/* CONTENT */
.team-content{
    position:absolute;
    bottom:0;
    width:100%;
    padding:10px;
    text-align:center;
    color:#fff;
}

/* TEXT */
.name{
    font-size:13px;
    font-weight:700;
    margin:2px 0;
}

.role{
    font-size:11px;
    opacity:0.9;
}

/* BUTTON */
.view-btn{
    margin-top:6px;
    padding:4px 10px;
    font-size:11px;
    border:none;
    border-radius:20px;
    background:#ff4d4d;
    color:#fff;
    cursor:pointer;
}

/* SHOW MORE BUTTON */
.team-more-wrap{
    text-align:center;
    margin-top:20px;
}

.team-more-btn{
    padding:10px 22px;
    border:none;
    border-radius:30px;
    background:linear-gradient(90deg,#391be6,#7a5cff);
    color:#fff;
    font-weight:600;
    cursor:pointer;
}

/* MODAL */
.team-message-modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.65);
    justify-content:center;
    align-items:center;
    z-index:9999;
}

.team-message-modal.active{
    display:flex;
}

.modal-content{
    background:#fff;
    width:90%;
    max-width:600px;
    padding:25px;
    border-radius:16px;
    text-align:center;
    position:relative;
}

.modal-close{
    position:absolute;
    right:10px;
    top:10px;
    border:none;
    width:30px;
    height:30px;
    border-radius:50%;
    cursor:pointer;
}

.modal-photo{
    width:120px;
    height:120px;
    /* border-radius:50%; */
    object-fit:cover;
    margin-bottom:10px;
    margin: auto;
}

.modal-name{
    font-size:20px;
    font-weight:700;
}

.modal-role{
    color:#e63946;
    margin-bottom:10px;
}

.modal-message{
    font-size:14px;
    max-height:220px;
    overflow:auto;
}

/* =========================
RESPONSIVE
========================= */

/* desktop -> 6 grid */
@media(max-width:1200px){
    .team-wall{
        grid-template-columns: repeat(4, 1fr);
    }
}

/* tablet */
@media(max-width:768px){

    .team-wall{
        grid-template-columns: repeat(2, 1fr);
    }

    .team-photo{
        height:200px;
    }

    /* SHOW ONLY 4 ON MOBILE */
    .team-card{
        display:none;
    }

    .team-card:nth-child(-n+4){
        display:block;
    }

    .team-wall.expanded .team-card{
        display:block;
    }
}

/* small mobile */
@media(max-width:480px){
    .team-wall{
        grid-template-columns: repeat(1, 1fr);
    }
}

</style>

<!-- =========================
JS
========================= -->
<script>

document.addEventListener("DOMContentLoaded", function () {

    /* =====================
    SHOW MORE MOBILE
    ===================== */
    const wall = document.getElementById("teamWall");
    const btn = document.getElementById("toggleTeam");

    let expanded = false;

    btn.addEventListener("click", function () {

        expanded = !expanded;

        if(expanded){
            wall.classList.add("expanded");
            btn.innerText = "Show Less Team";
        } else {
            wall.classList.remove("expanded");
            btn.innerText = "Show More Team";
        }

    });

    /* =====================
    MODAL
    ===================== */
    const modal = document.getElementById("teamMessageModal");
    const closeBtn = document.querySelector(".modal-close");
    const overlay = document.querySelector(".modal-overlay");

    document.querySelectorAll(".view-btn").forEach(btn => {

        btn.addEventListener("click", function () {

            const card = this.closest(".team-item");

            const img = card.querySelector(".team-photo").style.backgroundImage;
            const cleanImg = img.replace('url("','').replace('")','').replace("url('","").replace("')","");

            modal.querySelector(".modal-photo").src = cleanImg;
            modal.querySelector(".modal-name").innerText = card.querySelector(".name").innerText;
            modal.querySelector(".modal-role").innerText = card.querySelector(".role").innerText;
            modal.querySelector(".modal-message").innerHTML = card.querySelector(".long-content").innerHTML;

            modal.classList.add("active");
        });

    });

    closeBtn.onclick = () => modal.classList.remove("active");
    overlay.onclick = () => modal.classList.remove("active");

});

</script>