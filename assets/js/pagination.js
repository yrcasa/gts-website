// if you have any suggestion of questions, pleasse feel free to send me an email to chiholiu10@gmail.com

(function () {
  "use strict";

  function Pagination() {
    const objJson = [
      //January 27, 2021
      {
        adName: {
          title: "3-EASY TIPS TO PARA MAHANAP ANG THE ONE",
          date: "JANUARY 27, 2021",
          cover: "../assets/img/newsroom/paidAds10/Valentines-fb.png",
          description:
            "They say love makes the world go round. Some says it gives light to a darkened life. Kaya nga siguro napaka agresibo ng ilan para makahanap ng pag ibig na aakayin sila hanggang sa kanilang huling hininga. Nagkalat  ang mga dating apps, Memes, groups pati na rin online tarot videos  ...",
          url: "news/Valentines.php",
        },
      },
      {
        adName: {
          title: "TAONG 2021, TAON NA BA PARA SA BAKUNA?",
          date: "JANUARY 27, 2021",
          cover: "../assets/img/newsroom/paidAds10/Vaccine-fb.png",
          description:
            "Bago matapos ang 2020 ay unti-unti nang naglabasan ang iba’t-ibang klase ng bakuna para sa Covid-19 mula sa iba’t –ibang bansa. Marami ang nagdiwang at marami rin ang nagduda. Sumama’ ang dapat sana ay magandang balita nang malaman ng mga tao ang ...",
          url: "news/Vaccine.php",
        },
      },
      {
        adName: {
          title: "LOCKDOWN 2021, POSIBLE NGA BA?",
          date: "JANUARY 27, 2021",
          cover: "../assets/img/newsroom/paidAds10/Lockdown-Fb.png",
          description:
            "Isa sa hindi malilimutang kaganapan sa taong 2020 ay ang pagkakalockdown sa kabuuang Metro Manila at iba pang karatig na lugar bunsod ng Pandemya. Marami ang permanente at panandaliang nawalan ng kabuhayan. Nagkahanapan ng ayuda, pangangailangang ...",
          url: "news/Lockdown.php",
        },
      },
      //December 29 2020
      {
        adName: {
          title: "BAGONG TAON BAGONG STRAIN NG COVID-19?",
          date: "DECEMBER 29, 2020",
          cover: "../assets/img/newsroom/paidAds9/New-Year-FB.png",
          description:
            "2020 is about to end! Finally! Malapit nang matapos ang taong itinuturing ng marami na malas! Sing dami ng hindi nakapaghanda ang dami ng mga natamaan ng Virus sa panahon ng pandemya. Kung iisiping mabuti, marami sana ang napigilang mangyari kung  ...",
          url: "news/NewYear2021.php",
        },
      },
      {
        adName: {
          title: "LIGTAS NGA BA ANG AKING ANAK SA INTERNET?",
          date: "DECEMBER 29, 2020",
          cover: "../assets/img/newsroom/paidAds9/Children-Fb.png",
          description:
            "Mainit ang usaping pag-aaral sa gitna ng laban kontra Covid-19. Tinututukan kasi ng lahat ang usaping pangkalusugan at kaligtasan ng mga kabataan.  At mas lalo pa itong nag init nang muling isara ng kagawaran ang face-to-face learning sa 2021 alinsunod na rin sa ...",
          url: "news/SafeChildren.php",
        },
      },
      {
        adName: {
          title: "NAGING BIKTIMA KA NA BA NG FACEBOOK PHISHING?",
          date: "DECEMBER 29, 2020",
          cover: "../assets/img/newsroom/paidAds9/facebook-phishing.png",
          description:
            'Malapit na naman matapos ang pinakamahabang pagdiriwang sa Pilipinas. Maraming handaan. Maraming kasiyahan at marami ding laganap na panloloko at pananamantala. Pamilyar ka ba sa term na "Phishing"? Kung ano ito at ano ang epekto nito sa mga   ...',
          url: "news/FBPhishing.php",
        },
      },
      // December 23, 2020
      {
        adName: {
          title: "PASKONG PINOY AT ANG 2020",
          date: "DECEMBER 23, 2020",
          cover: "../assets/img/newsroom/paidAds8/web.gif",
          description:
            "Sa dami ng nangyari ngayong 2020, hindi na nakakapagtaka kung lahat ng tao sa buong mundo alerto na sa bawat unfortunate events na maaaring mangyari sa kanila. Maraming gutom, down at depressed. Pero siyempre hindi ‘yan  ...",
          url: "news/HappyHolidays.php",
        },
      },
      // December 02/12/2020
      {
        adName: {
          title: "CHRISTMAS @ 2020: THE NEW NORMAL OF EVERY BATANG JUAN",
          date: "DECEMBER 02, 2020",
          cover: "../assets/img/newsroom/paidAds7/fb_Christmas_@_2020.png",
          description:
            "ovid 19 literally made our lives turned upside down. Hindi pa man pasko alam at ramdam na natinghindi na maibabalik ang sigla ng dati nating pasko. Ng nakagisnan nating pasko at ng kinaugalian nating pasko. Bukod sa bumigat na ang pamumuhay ng bawat isa,nawala na rin ang ...",
          url: "news/Christmas.php",
        },
      },
      {
        adName: {
          title: "CYBER TROLL SLAYERS OF 2020: PAPASA KA BA?",
          date: "DECEMBER 02, 2020",
          cover: "../assets/img/newsroom/paidAds7/FB_Troll_Slayer.png",
          description:
            "Sa panahon ngayon (lalo na sa panahon ng pandemya) malamang ay alam mo na ang ibig sabihin ng trollslayer. Sila ‘yong mga taong nakikipagdigma ng mga salita sa social media tungkol  ...",
          url: "news/CyberTroll.php",
        },
      },
      {
        adName: {
          title: "REGALO NANG 2020",
          date: "DECEMBER 02, 2020",
          cover: "../assets/img/newsroom/paidAds7/FB_Regalo_ng_2020.png",
          description:
            "Malapit na ang pasko, pero mukhang maraming kasiyahan ang mauurong.Malapit na ang pasko pero mukhang marami sa ating ang hindi Merry ang Christmas Malapit na ang pasko, pero nauna nang magbigay ng kakaibang ...",
          url: "news/Regalo.php",
        },
      },
      //October 31 2020
      {
        adName: {
          title: "HUWAG MAGING BIKTIMA NG TREAT AND TRICK!",
          date: "OCTOBER 31, 2020",
          cover:
            "../assets/img/newsroom/paidAds6/fb-poster-trick-and-treat.jpg",
          description:
            "Malapit na naman ang Halloween. Malapit na naman ang hingian ng candy at iba pang matatamis na pagkaing-pambata, pero higit sa lahat uso na naman ang kwentong katatakutan. At isa sa mga pinakakatakot na pangyayari ...",
          url: "news/Halloween.php",
        },
      },
      {
        adName: {
          title: "GHOSTING: ANO, BAKIT, AT PAANO MAIIWASAN?",
          date: "OCTOBER 31, 2020",
          cover: "../assets/img/newsroom/paidAds6/fb-poster-ghosting.jpg",
          description:
            "NagHi, Nagwave, Nangamusta, Nag-ayang kumain, Nag-ayang matulog, Hindi na nagparamdam ...",
          url: "news/Ghosting.php",
        },
      },
      {
        adName: {
          title: "PST! MAY SIKRETO SI ALING MARITES!",
          date: "OCTOBER 31, 2020",
          cover: "../assets/img/newsroom/paidAds6/FB-poster-Marites.jpg",
          description:
            "Pst! May tinatagong sikreto ang numero unong cctv ng buong Pilipinas! Hindi na ito tungkol kay Teresita o sa anak niyang babae na may bago na namang boyfriend. Hindi rin ito tungkol sa dahan-dahang pangangampanya ...",
          url: "news/Marites.php",
        },
      },
      //October 5 2020
      {
        adName: {
          title:
            "ONLINE CLASSES FOR MEDICAL FIELD - IS ONLINE CLASSES EFFECTIVE FOR STUDENTS IN MEDICAL FIELD ?",
          date: "OCTOBER 05, 2020",
          cover: "../assets/img/newsroom/paidAds5/School_Fb_post.png",
          description:
            "Effective ba ang online class para samga medical student? “However, the reality is that some subjects are much harder to transfer online. A biochemistry or introductory economics lecture is easier to teach virtually than a  ...",
          url: "news/OnlineSchool.php",
        },
      },

      {
        adName: {
          title:
            'BORACAY, OPEN NA PARA SA MGA TURISTA? - DAPAT NA NGA BA BUKSAN ANG BORACAY PARA SA MGA TURISTA NGAYONG "BER" ?',
          date: "OCTOBER 05, 2020",
          cover: "../assets/img/newsroom/paidAds5/Boracy_Fb_post.png",
          description:
            "Ayon sa DOT, binuksanna ang Boracay para samgaturistang gusto mag bakasyon. Ngunit, sabi ng ilan, paanomagbabakasyon ang mga turista kung ang Pilipinas pa rin ang nangunguna sa pinakamaraming cases ng COVID-19 sa  ...",
          url: "news/Boracay.php",
        },
      },

      {
        adName: {
          title:
            "IMPORTANCE OF SEXUAL HEALTH - HOW IMPORTANT A SEXUAL HEALTH INDIVIDUALS ?",
          date: "OCTOBER 05, 2020",
          cover: "../assets/img/newsroom/paidAds5/Sexual_health_Fb_post.png",
          description:
            "According to pandiahealth, sexual health is important part of our physical and emotional health. It simply means that sexuality of an individual is a natural part and it helps us recognize and respect the sexual rights of ...",
          url: "news/SexualHealth.php",
        },
      },

      {
        adName: {
          title: '45% "PA LANG" WALANG TRABAHO',
          date: "AUGUST 29, 2020",
          cover: "../assets/img/newsroom/paidAds4/45_FB_post.png",
          description:
            'Ayon sa balita, 45% "pa lang" ang nawawalan ng trabaho at hindi pa 100%. Dapat nga ba na maging masaya tayo dahil sa mga taong nawalan ng trabaho o hanap buhay? Yan ang kinainis ng...',
          url: "news/45PercentWalangTrabaho.php",
        },
      },
      {
        adName: {
          title: "HEALTH CARE WORKERS, HUMINGI NANG PAHINGA",
          date: "AUGUST 29, 2020",
          cover: "../assets/img/newsroom/paidAds4/Healthworker_FB_post.png",
          description:
            "Sa panahon ngayon, ang mga health care workers o frontliners ang nagsisilbing bayani sa ating lipunan dahil sila ang lumalaban para maging maayos at mawala ang virus sa ating bansa. Ngunit paano sila makakapag trabaho ng maayos kung hindi...",
          url: "news/HealthCareWorkers.php",
        },
      },
      {
        adName: {
          title: "FACESHIELD, REQUIRED NA NGA BA?",
          date: "AUGUST 29, 2020",
          cover: "../assets/img/newsroom/paidAds4/Faceshield_FB_post.png",
          description:
            "Maging sa pribado o pampublikong lugar, nagbaba na ng memo ang pamahalaan na lahat ay dapat nakasuot na ng faceshield. Isa itong...",
          url: "news/FaceShield.php",
        },
      },
      //Paid Ads 7
      {
        adName: {
          title: "ANGKAS MO, SAGOT KO, IKAW MISMO PROTEKTADO",
          date: "JULY 29, 2020",
          cover: "../assets/img/newsroom/angkas-cover.png",
          description:
            "Dahil sa kakulangan ng transportasyon ngayong COVID-19, ang goverment ay nagapproved ng isang safety protocol ng kung saan pinapayagan na ang mga motorcycle rider na bumyahe upang makaiwas...",
          url: "news/Angkas.php",
        },
      },
      //Paid Ads 8
      {
        adName: {
          title:
            "DANGER ZONE - BED CAPACITY SA OSPITAL, NAGKAKAUBUSAN NA NGA BA?",
          date: "JULY 29, 2020",
          cover: "../assets/img/newsroom/dangerZone-cover.png",
          description:
            "Lumipas ang ika-100 araw ng ECQ sa Pilipinas, tumataas pa rin ang bilang ng mga tao na may COVID19 virus. Dahil dito, nagkakaroon ng shortage ng bed capacity sa mga hospital. Hindi na kaya mag...",
          url: "news/DangerZone.php",
        },
      },
      //Paid Ads 9
      {
        adName: {
          title:
            "NO STUDENT SHOULD BE LEFT BEHIND - BAKIT ANG HIRAP MAG ARAL NGAYON",
          date: "JULY 29, 2020",
          cover: "../assets/img/newsroom/noStudent-cover.png",
          description:
            "Students have been facing real challenges during the COVID19 crisis. Parents need to invest in a school from home setup like stable internet connection, laptop or desktop computer. Dahil dito...",
          url: "news/NoStudent.php",
        },
      },
      //Paid Ads 4
      {
        adName: {
          title: "PANU KA PAPASOK?",
          date: "JUNE 25, 2020",
          cover: "../assets/img/newsroom/newsfour/1-PaanokaPapasok(Cover).png",
          description:
            "Sa GCQ ang solution para makapasok sa trabaho is bike to work. Kapag hindi ka nag bike automatic...",
          url: "news/PanuKaPapasok.php",
        },
      },
      //Paid Ads 5

      {
        adName: {
          title: "ANU NGA BA ANG SECOND WAVE?",
          date: "JUNE 25, 2020",
          cover: "../assets/img/newsroom/newsfive/2-SecondWave(Cover).png",
          description:
            "Sa usapang Covid 19, ang Second wave ay ang muling pagbalik ng dami ng infected ng Covid19 Virus. Para maiwasan...",
          url: "news/SecondWave.php",
        },
      },
      //Paid Ads 6
      {
        adName: {
          title: "HUGAS KAMAY!",
          date: "JUNE 25, 2020",
          cover: "../assets/img/newsroom/newsix/3-HugasKamay(Cover).png",
          description:
            "Kahit nakadeclare na ang GCQ wag pa rin kalimutan maghugas ng kamay palagi. Ang paghugas ng kamay...",
          url: "news/HugasKamay.php",
        },
      },
      //Paid Ads 1
      {
        adName: {
          title: "SAN NAPUNTA ANG AYUDA?",
          date: "MAY 18, 2020",
          cover: "../assets/img/newsroom/newsone/san-napunta-ang-ayuda.jpg",
          description:
            "Sa panahon ng COVID-19, nakukuha natin ang Ayuda via sa phone and email natin. If your phone and email is hacked your dead...",
          url: "news/Ayuda.php",
        },
      },
      //Paid Ads 2
      {
        adName: {
          title: "FREE VACCINE!",
          date: "MAY 18, 2020",
          cover: "../assets/img/newsroom/newstwo/free-vaccine.jpg",
          description:
            "Kung malusog ka at maingat di mo need ng vaccine, eh paano kung malusog ka ngunit ang bulsa mo hindi? Vaccinate your cellphone and other devices para lagi busog ang bulsa mo...",
          url: "news/freeVaccine.php",
        },
      },
      //Paid Ads 3
      {
        adName: {
          title: "NAG COMPLY KA NA BA?",
          date: "MAY 18, 2020",
          cover: "../assets/img/newsroom/newsthree/nag-comply.jpg",
          description:
            "Kung si Kim Chiu ay may batas, alam mo rin ba ang batas ng e-commerce? Alam mo ba ang kahalagahan ng antivirus...",
          url: "news/Comply.php",
        },
      },
    ];

    const prevButton = document.getElementById("button_prev");
    const nextButton = document.getElementById("button_next");

    let current_page = 1;
    let records_per_page = 3;

    this.init = function () {
      changePage(1);
      clickPage();
      addEventListeners();
    };

    let addEventListeners = function () {
      prevButton.addEventListener("click", prevPage);
      nextButton.addEventListener("click", nextPage);
    };

    let changePage = function (page) {
      const listingArticles = document.getElementById("listingArticles");

      if (page < 1) {
        page = 1;
      }
      if (page > numPages() - 1) {
        page = numPages();
      }

      listingArticles.innerHTML = "";

      for (
        var i = (page - 1) * records_per_page;
        i < page * records_per_page && i < objJson.length;
        i++
      ) {
        // The Mapping of json
        listingArticles.innerHTML += `
                    <div class="row content">

                    <div class="card mb-3 shadow p-3 bg-white rounded mx-auto">
                         <div class="row no-gutters">

                       <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <img height="300" width="400" src="${objJson[i].adName.cover}" alt="${objJson[i].adName.title}" class="img-responsive">
                          </div>   


                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="card-body">
                        <h3 class="card-title" style="
                        font-weight: bold;
                        margin: 10px 0 5px 0;
                        color: #111; line-height: 1;">
                            ${objJson[i].adName.title}
                        </h3>
                        <p class="card-text"><small class="text-muted">
                         ${objJson[i].adName.date}</small></p>
  
                          <p>${objJson[i].adName.description}</p>        
                          
                      <p class="card-text">
                      <a href="${objJson[i].adName.url}" target="_blank" class="btn-learn-more">
                        Read More
                      </a></p>

                        </div>
                    </div>

                       </div>
                </div>
  
             </div>
                    `;
      }
    };

    let prevPage = function () {
      if (current_page > 1) {
        current_page--;
        changePage(current_page);
      }
    };

    let nextPage = function () {
      if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
      }
      else if (current_page == 5){
        nextButton.disabled = true;
      }
    };

    let clickPage = function () {
      document.addEventListener("click", function (e) {
        if (
          e.target.nodeName == "SPAN" &&
          e.target.classList.contains("clickPageNumber")
        ) {
          current_page = e.target.textContent;
          changePage(current_page);
        }
      });
    };

    let numPages = function () {
      return Math.ceil(objJson.length / records_per_page);
    };
  }
  let pagination = new Pagination();
  pagination.init();
})();
