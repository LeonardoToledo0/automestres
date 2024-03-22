// Banner
$(".banner").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

// Serviços
$(".servico > div > div").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// galeria
$(".galeria div").slick({
  dots: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// montadora
$(".montadora").slick({
  dots: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// Projeto Oficina
$(".container-projeto").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// Scroll
new WOW().init();

// Menu Mobile
document.querySelector(".abrir-menu").onclick = () => {
  document.documentElement.classList.add("menu-ativo");
};
document.querySelector(".fechar-menu").onclick = () => {
  document.documentElement.classList.remove("menu-ativo");
};

// Menu Fixo
window.onscroll = () => {
  let top = document.documentElement.scrollTop;
  if (top > 300) {
    document.getElementById("menu-fixo").classList.add("menuFixo");
  } else {
    document.getElementById("menu-fixo").classList.remove("menuFixo");
  }
};

// Whats
EnviaWhats = () => {
  let assunto = "Site Oficina Auto Mestres";
  let nome = "Nome:" + document.getElementById("nome").value;
  let email = "Email:" + document.getElementById("email").value;
  let fone = "Fone:" + document.getElementById("fone").value;
  let mens = "Mens:" + document.getElementById("mens").value;

  let numeroWhats = "5511963535038";

  let quebreDeLinha = "%0A";

  var mensagem = encodeURIComponent(
    assunto +
      quebreDeLinha +
      nome +
      quebreDeLinha +
      email +
      quebreDeLinha +
      fone +
      quebreDeLinha +
      mens
  );
  window.open(
    "https://api.whatsapp.com/send?phone=" + numeroWhats + "&text=" + mensagem,
    "_blank"
  );
  document.getElementById("nome").value = "";
  document.getElementById("email").value = "";
  document.getElementById("fone").value = "";
  document.getElementById("mens").value = "";
};
