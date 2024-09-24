<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 8: Team Gin with Nestea</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-section {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 250px; 
            padding: 1rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            z-index: 1000;
        }

        .contact-section h2 {
            font-size: 1.2rem; 
            margin-bottom: 1rem;
            text-align: center;
        }

        .contact-section .form-group {
            margin-bottom: 0.5rem; 
        }

        .contact-section input[type="text"],
        .contact-section input[type="email"] {
            width: 100%;
            padding: 0.3rem;
            font-size: 0.9rem; 
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-section input[type="submit"] {
            width: 100%;
            padding: 0.5rem;
            font-size: 0.9rem; 
            background-color: #5c9e8f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-section input[type="submit"]:hover {
            background-color: #4a8270;
        }

        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slideshow-container img {
            position: absolute;
            width: 100%;
            height: auto;
            max-height: 100%; 
            object-fit: cover;
            object-position: center; 
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slideshow-container img.active {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Group 8: Team Gin with Nestea</h1>
    </header>

    <div class="container">

        <div class="contact-section">
            <div class="slideshow-container">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/455323578_883378626985626_3142330665925073083_n.jpg?stp=dst-jpg_p180x540&_nc_cat=100&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGFRKKdY0POtWqqr77U3v1kwZBBJtjwkD7BkEEm2PCQPkOTB_VYoYbjQsMOjFNA1DT0Y9DEEUpDX59yhCgR6q7i&_nc_ohc=13aDaNfS5NsQ7kNvgHtos2A&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QFOR6_aGU4Wf6Vc2W_Jv-jOatSlyrnBSq_AfxxuYRGPgg&oe=66F4FCA4" class="slide" alt="Slide 1">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/456951522_1603863767011262_1162274274048410487_n.jpg?stp=dst-jpg_s206x206&_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGbgDJTUnLqRpxEeWgvtKQXaujSOvnwJsFq6NI6-fAmwVBw6hage10OLGXPwSD7l-U-VgCoY6eQP6GqacThvY2B&_nc_ohc=QdMhVttJrKEQ7kNvgFFYjPn&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QGLopirk1-uOv99vIosWXShnpR625fgGEi3lN65KvovPQ&oe=66F60EC6" class="slide" alt="Slide 2">
                <img src="https://scontent.fmnl9-5.fna.fbcdn.net/v/t39.30808-1/344272382_183870051228478_7095126384021005632_n.jpg?stp=dst-jpg_s200x200&_nc_cat=102&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeFgthS_paNZDBSgDUyotCzwApRoB7kmBlAClGgHuSYGUNwdgSmbm_PuTXF6ueJKPwIZIm77NGHpnZrWINvYJivu&_nc_ohc=dw9P3f2Sor4Q7kNvgGKjR8h&_nc_ht=scontent.fmnl9-5.fna&_nc_gid=ASAON37b4r5_U0jS7DbUywM&oh=00_AYBhRCHxFDvg_K7MBpqoEbdOhkyukVhwILfKTtNFst3t0Q&oe=66F896A8" class="slide" alt="Slide 3">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/457139941_1728712707948486_1672429212356593639_n.jpg?stp=dst-jpg_s480x480&_nc_cat=108&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeHdzbr3QNAeCgt7kmBbJD5ieWl9WnSu6IV5aX1adK7ohTrrfAnorVWIbkZlOrykPAGp1htphlXRUBifkFHxl7a1&_nc_ohc=MTXl-c-hdmQQ7kNvgEedCPh&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=AOwVkyxW02abfvTXEORz2tg&oh=03_Q7cD1QFJuGnTBjfoluIZLSsQmodXrH-HO9EKyYbMXmnZPrxLgA&oe=66F60264" class="slide" alt="Slide 4">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/419213255_1090038565772264_2688707345675697790_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeECeGqF8aFZUDRMP2jEzHFPk99e11eF_2GT317XV4X_YSizfYqZg1OD8lH_sxwS6TomXrUc2AijpiAj0ob0XXXf&_nc_ohc=nlaYdfEV2hgQ7kNvgEiooLV&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QHo_hudyLN8iNLU_aHkesDFOvZJ9r8oy-tVdK2AvUqFtg&oe=66F4FD7A" class="slide" alt="Slide 5">
            </div>

            <div class="form-content">
                <h2>Contact Us</h2>
                <form id="contactForm" method="post" action="process.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slideshow-container img');
        const totalSlides = slides.length;

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if (index === slideIndex) {
                    slide.classList.add('active');
                }
            });

            slideIndex = (slideIndex + 1) % totalSlides;
        }

        setInterval(showSlides, 3000); 
        showSlides(); 
    </script>
</body>
</html>