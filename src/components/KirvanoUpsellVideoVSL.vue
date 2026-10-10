<style>
/* Container para vídeos P1 e P2 */
/* O pai (.ga4983248) é flex: sem isso a seção fica com a largura do vídeo e desalinha */
.video-p1-section,
.video-p2-section {
    flex: 0 0 100%;
    width: 100%;
    max-width: 100%;
    align-self: stretch;
}

.personalized-video-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 100%;
    min-height: 100vh;
    padding-top: 20px;
}

.personalized-video-container vturb-smartplayer,
.personalized-video-container-p2 vturb-smartplayer {
    display: block !important;
    margin: 0 auto !important;
    width: 100% !important;
    max-width: 400px !important;
    min-width: 300px !important;
}

.personalized-video-container vturb-smartplayer > div,
.personalized-video-container-p2 vturb-smartplayer > div {
    width: 100% !important;
}

@media (min-width: 768px) {
    .personalized-video-container,
    .personalized-video-container-p2 {
        padding-top: 40px;
    }
    .personalized-video-container vturb-smartplayer,
    .personalized-video-container-p2 vturb-smartplayer {
        width: 560px !important;
        max-width: 560px !important;
        min-width: 560px !important;
    }
    .personalized-video-container vturb-smartplayer > div,
    .personalized-video-container-p2 vturb-smartplayer > div {
        width: 560px !important;
    }
}

.personalized-video-container-p2 {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 100%;
    min-height: 100vh;
    padding-top: 20px;
}

/* Modal de email fullscreen */
.parte2-fullscreen {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    display: flex !important;
    align-items: stretch;
    justify-content: stretch;
    background: transparent !important;
    z-index: 99999 !important;
    overflow: auto;
}

.parte2-fullscreen.parte2-hidden {
    display: none !important;
}

.bg-mgi {
    background-image: url('../assets/bg/dark-bg-wide.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.audio-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

.captions {
    margin-top: 20px;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    border-radius: 5px;
    width: 90%;
    text-align: center;
}

.legendas {
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    text-align: center;
}

/* Footer Styles */
.site-footer {
    background-color: #f8fafc;
    color: #333;
    padding: 30px 20px 20px;
    margin-top: 50px;
    border-top: 1px solid #e0e0e0;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-disclaimer {
    margin-bottom: 25px;
}

.disclaimer-text,
.results-disclaimer {
    font-size: 12px;
    line-height: 1.6;
    color: #666;
    margin: 10px 0;
    text-align: center;
}

.disclaimer-text strong {
    color: #1a1a2e;
}

.footer-links {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin: 20px 0;
}

.footer-links span {
    color: #555;
    font-size: 13px;
}

.footer-links .separator {
    color: #999;
}

.footer-copyright {
    text-align: center;
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid #e0e0e0;
}

.footer-copyright p {
    font-size: 11px;
    color: #666;
    margin: 0;
}

@media (max-width: 768px) {
    .site-footer {
        padding: 25px 15px 15px;
    }

    .footer-links {
        flex-direction: column;
        gap: 8px;
    }

    .footer-links .separator {
        display: none;
    }

    .disclaimer-text,
    .results-disclaimer {
        font-size: 11px;
    }
}

#audio-astrology .audio-astrology-container {
    height: 100%;
    width: calc(100% - 70px);
}


#audio-astrology .vjs-has-started .vjs-control-bar {
    display: none;
}

#audio-astrology .vjs-text-track-cue {
    height: 100% !important;
    top: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
}

#audio-astrology .vjs-text-track-cue>div {
    font-family: 'Poppins' !important;
    font-size: 1.5rem;
    text-align: center;
    font-weight: 500;
    background: initial !important;
}

#audio-astrology .buttons-audio-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    width: 69px;
    height: fit-content;
    padding: 25px 20px;
    border-left: 4px solid #ffffff;
    position: absolute;
    right: 0;
    top: calc(50% - 55.5px);
}

#audio-astrology .button-video .fas {
    display: none;
    color: #fff;
}

#audio-astrology .start-pause-audio .fas {
    font-size: 1.375rem;
}

#audio-astrology .volume-video .fas {
    font-size: 1.5rem;
}

#audio-astrology .start-pause-audio.active .fa-pause,
#audio-astrology .start-pause-audio.false .fa-play {
    display: block;
}

#audio-astrology .volume-video.active .fa-volume-up,
#audio-astrology .volume-video.false .fa-volume-off {
    display: block;
}

#audio-astrology .vjs-text-track-display {
    bottom: initial !important;
    position: static;
    height: 100%;
}

#audio-astrology .vjs-text-track-display>div {
    position: static !important;
    height: 100%;
    margin: 0 !important;
}

.birth-date-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
}

@media (max-width: 767px) {
    .birth-date-list {
        gap: 8px;
    }

    .modal-form {
        padding: 20px 10px 20px;
        max-width: 100%;
        min-height: 280px;
    }

    .month-item {
        min-width: 140px !important;
        letter-spacing: -0.3px;
        padding: 10px 12px !important;
        font-size: 1.05rem !important;
    }

    .bs5829 {
        font-size: 1.05rem;
        padding: 6px 8px;
    }
}

.form-modal {
    max-width: 699px;
    width: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 6px;
    font-weight: 500;
    margin: 0 auto;
    border-radius: 10px;
    min-height: 350px;
    align-items: center;
    justify-content: center;
}



.month-item {
    min-width: 140px;
    max-height: 60px;
    padding: 12px 16px;
    font-size: 1.1rem;
}

#dateMonth .birth-date-month {
    margin: 0 -5px;
    display: flex;
    gap: 4px;
}

.birth-date-month {
    margin-top: 25px;
}

.animation-destiny {
    padding: 20px;
    width: 100%;
    margin-top: 8px;
    background: rgba(255, 255, 255, 1);
    border: 2px solid var(--color-btn);
    border-radius: 10px;
}

.animation-calc-container {
    height: 100%;
    position: relative;
}

.row-animation {
    display: flex;
    gap: 10px;
    align-items: center;
    position: absolute;
}

.card-animation {
    padding: 5px 10px;
    width: fit-content;
    background: #485b76;
    font-size: 1.125rem;
    font-weight: 600;
    border-radius: 5px;
    user-select: none;
    color: white;
}

@media (max-width: 767px) {
    .card-animation {
        padding: 2px 8px;
        font-size: 0.875rem;
        letter-spacing: -0.5px;
        font-weight: 600;
    }
}

@media (max-width: 767px) {
    .row-animation {
        gap: 4px;
    }
}

.icon-animation {
    font-size: 1.375rem;
    color: #000;
}

@media (max-width: 767px) {
    .date-day {
        min-width: 55px !important;
        padding: 10px 12px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
    }
}

.date-day {
    padding: 14px 18px;
    line-height: 1.4;
    min-width: 70px;
    font-size: 1.2rem;
}








@import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap');

.quiz-intro-section {
  background-color: #f8f9fa;
  min-height: 100vh;
  font-family: 'Sora', sans-serif;
  color: #333;
  padding-top: 8px; /* Compensa a altura da barra fixa */
}

.page-wrapper {
  padding-top: 8px; /* Compensa a altura da barra fixa */
}

.progress-bar-top {
  width: 100%;
  height: 8px;
  background-color: #e0e0e0;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
  transition: opacity 0.3s ease;
}

.progress-bar-fill {
  height: 100%;
  background-color: #673ab7;
  transition: width 0.4s ease;
  border-radius: 0 4px 4px 0;
}

.quiz-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 40px 20px;
  text-align: center;
}

.main-title {
    font-size: 1.8rem;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 30px;
    color: #333;
    text-align: center;
}

.highlight-text {
  background-color: #ffe082;
  padding: 2px 8px;
  border-radius: 4px;
  display: inline;
}

.alert-box {
  background-color: #fff3cd;
  border: 1px solid #ffeeba;
  border-radius: 8px;
  padding: 15px 20px;
  margin-bottom: 30px;
  display: flex;
  align-items: flex-start;
  text-align: left;
  color: #856404;
  font-size: 0.95rem;
  line-height: 1.5;
}

.alert-icon {
  font-size: 1.5rem;
  margin-right: 10px;
  flex-shrink: 0;
}

.alert-box p {
  margin: 0;
}

.selection-prompt {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 25px;
  color: #333;
}

.gender-selection {
  margin-bottom: 40px;
}

.gender-cards {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.gender-card {
  width: 100%;
  max-width: 250px;
  height: 350px;
  border-radius: 12px;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  border: 3px solid transparent;
  padding: 0;
  background: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.gender-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.gender-card.selected {
  border-color: #673ab7;
  transform: scale(1.02);
  box-shadow: 0 6px 18px rgba(195, 0, 255, 0.4);
}

.card-image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  position: absolute;
  top: 0;
  left: 0;
}

.female-bg {
  background-image: url('@/assets/imgs/astrology/female.png');
}

.male-bg {
  background-image: url('@/assets/imgs/astrology/masculine.png');
}

.card-footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #673ab7;
  color: white;
  padding: 15px 20px;
  font-weight: 600;
  font-size: 1.1rem;
  text-align: left;
  display: flex;
  align-items: center;
  box-sizing: border-box;
}

.arrow {
  font-size: 1.2rem;
  margin-right: 8px;
  font-weight: bold;
}

.privacy-section {
  margin-top: 40px;
  font-size: 0.9rem;
  color: #555;
  line-height: 1.6;
}

.privacy-text {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

.lock-icon {
  font-size: 1.2rem;
  margin-right: 8px;
}

.privacy-text strong {
  color: #333;
}

.stats-text {
  margin: 0;
}

/* Seção do nome (mantendo compatibilidade) */
.name-section {
  margin-top: 40px;
}

.name-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 20px;
}

.name-input-container {
  margin-bottom: 20px;
}

.name-input {
  width: 100%;
  max-width: 400px;
  padding: 15px 20px;
  border: 2px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
  font-family: 'Sora', sans-serif;
  transition: border-color 0.3s ease;
}

.name-input:focus {
  outline: none;
  border-color: #673ab7;
}

.error-message {
  color: #dc3545;
  font-size: 0.9rem;
  margin-top: 5px;
}

.continue-button-container {
  margin-top: 20px;
}

.continue-button {
  background-color: #19a10b;
  color: white;
  border: none;
  padding: 15px 30px;
  border-radius: 8px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-family: 'Sora', sans-serif;
}

.continue-button:hover {
  background-color: #157a09;
}

/* Estilo para o input de nome */
.field-input {
  width: 100%;
  max-width: 500px;
  padding: 18px 24px;
  border: 2px solid #ddd;
  border-radius: 10px;
  font-size: 1.2rem;
  font-family: 'Sora', sans-serif;
  font-weight: 500;
  background-color: #fff;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
  display: block;
}

.field-input::placeholder {
  color: #999;
  font-weight: 400;
}

/* Estilo para o botão do formulário */
.button-form {
  background-color: #19a10b !important;
  color: white;
  border: none;
  padding: 18px 40px;
  border-radius: 10px;
  font-size: 1.2rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: 'Sora', sans-serif;
  box-shadow: 0 4px 12px rgba(25, 161, 11, 0.3);
  margin-top: 20px;
  min-width: 280px;
}

.button-form:hover {
  background-color: #157a09 !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(25, 161, 11, 0.4);
}

.error-field {
  color: #dc3545;
  font-size: 0.95rem;
  margin-top: 10px;
  text-align: center;
  font-weight: 500;
}

.name-input-section {
  margin: 30px 0;
  padding: 0 20px;
}

.form-button {
  text-align: center;
  margin-top: 25px;
}

.botao-desafio {
        min-width: initial;
        width: 100%;
        padding: 15px 10px;
        min-height: initial;
        font-size: 0.75rem;
    }

    .botao-desafio img {
        height: 40px;
    }

    .botao-civil img {
        height: 40px;
    }

    .botao-desafio {
    background: #673ab78c;
    border: 2px solid purple;
    padding: 15px 10px;
    border-radius: 15px;
    width: 100%;
    font-size: 1rem;
    font-family: 'Sora';
    min-height: 130px;
    font-weight: 600;
    color: white;
}

/* Responsividade */
@media (max-width: 600px) {
  .quiz-container {
    padding: 30px 15px;
  }

  .main-title {
    font-size: 1.5rem;
    margin-bottom: 25px;
  }
  
  .field-input {
    max-width: 100%;
    padding: 15px 20px;
    font-size: 1.1rem;
  }

  .gender-cards {
    flex-direction: row;
    justify-content: center;
    gap: 15px;
    align-items: center;
  }

  .gender-card {
    width: 47%;
    max-width: 180px;
    height: 260px;
  }

  .card-footer {
    font-size: 0.9rem;
    padding: 10px 12px;
  }

  .privacy-section {
    font-size: 0.85rem;
    padding: 0 10px;
  }

  .name-input {
    padding: 12px 15px;
  }
}

.decade-selector {
    width: 100%;
    max-width: 600px;
    /* Ajuste conforme necessário */
    margin: 0 auto;
}

.decade-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0;
    list-style-type: none;
    margin: -5px;
    /* Compensa as margens dos itens */
}

.decade-grid-item {
    flex-basis: calc(25% - 10px);
    /* 4 colunas para desktop */
    margin: 5px;
}

.decade-button {
    width: 100%;
    padding: 12px 8px;
    text-align: center;
    background-color: white;
    color: black;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    font-size: 1rem;
    border-radius: 4px;
    font-family: 'Sora', sans-serif;
    font-weight: 600;
    border-bottom: purple 3px solid;
}

.decade-button:hover {
    transform: scale(1.05);
}

.decade-button:active {
    transform: scale(0.98);
}

.decade-button--highlight {
    background-color: #ffd700;
    color: black;
}

@media (max-width: 768px) {
    .decade-grid-item {
        flex-basis: calc(33.333% - 10px);
        /* 3 colunas para tablets */
    }

    .botao-civil img {
        height: 40px;
    }

    .botao-desafio img {
        height: 40px;
    }

    .botao-desafio {
        min-width: initial;
        width: 100%;
        padding: 15px 10px;
        min-height: initial;
        font-size: 0.75rem;
    }

    .botao-civil {
        font-size: 0.75rem;
    }
}

@media (max-width: 480px) {
    .decade-grid-item {
        flex-basis: calc(50% - 10px);
        /* 2 colunas para smartphones */
    }
}

.year-selector {
    width: 100%;
    max-width: 800px;
    /* Ajuste conforme necessário */
    margin: 0 auto;
}

.year-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0;
    list-style-type: none;
    margin: -4px;
    /* Compensa as margens dos itens */
}

.year-grid-item {
    flex-basis: calc(20% - 8px);
    /* 5 colunas para desktop */
    margin: 4px;
}

.year-button {
    width: 100%;
    padding: 10px 5px;
    text-align: center;
    background-color: white;
    color: black;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    font-size: 1.1rem;
    border-radius: 4px;
    font-family: 'Sora', sans-serif;
    font-weight: 600;
    border-bottom: purple 3px solid;
}

.year-button:hover {
    transform: scale(1.05);
}

.year-button:active {
    transform: scale(0.98);
}

.year-button--highlight {
    background-color: #ffd700;
    color: black;
}

@media (max-width: 768px) {
    .year-grid-item {
        flex-basis: calc(25% - 8px);
        /* 4 colunas para tablets */
    }
}

@media (max-width: 480px) {
    .year-grid-item {
        flex-basis: calc(33.333% - 8px);
        /* 3 colunas para smartphones */
    }
}

.div-status-civil{

}

.list-status-civil{

}

.navigation-container {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
</style>

<template lang="br">
    <div id="page-wrapper" class="page-wrapper">
        <div class="background-image-sign" v-show="this.backgroundVSL == true" style="background-color: purple">
            <img src="../assets/astrology/bg.png" style="filter: brightness(0.6);"alt="">
        </div>
        <div class="container">
            <div class="ga4983248 container">
                <section class="eh90427" v-if="section1">
                    <div class="hf-4920">
                        <div class="progress-bar-top" v-if="showProgressBar">
                            <div class="progress-bar-fill" :style="{ width: progressPercentage + '%' }"></div>
                        </div>
                    </div>
                    <div class="form-modal">
                        <div class="form-container">

                            <div class="ms1" v-if="currentStep === 1">
                                <!-- Barra de progresso laranja no topo -->
                                <div class="quiz-container">
                                <!-- Título principal -->
                                <h2 class="main-title" style="font-size: 18px">
                                    Em apenas 30 segundos, identifique o número que rege a sua vibração e veja como alinhar a sua energia com a <span class="highlight-text">prosperidade</span>!
                                </h2>


                                <!-- Caixa de alerta/atenção -->
                                <div class="alert-box">
                                    <span class="alert-icon">⚠️</span>
                                    <p>Atenção: Se a sua vida começar a fluir depois do teste, fica a dever-me um café! 😊</p>
                                </div>

                                <!-- Prompt para seleção de gênero -->
                                <p class="selection-prompt">Selecione o seu género para iniciar o teste.</p>

                                <!-- Cards de seleção de gênero -->
                                <div class="gender-selection" v-if="parteDoisSexo">
                                    <div class="gender-cards">
                                    <button
                                        class="gender-card"
                                        :class="{ 'selected': genderValue === 'feminino' }"
                                        @click="clickButtonGender('feminino')"
                                    >
                                        <div class="card-image female-bg"></div>
                                        <div class="card-footer">
                                        <span class="arrow">></span> Mulher
                                        </div>
                                    </button>

                                    <button
                                        class="gender-card"
                                        :class="{ 'selected': genderValue === 'masculino' }"
                                        @click="clickButtonGender('masculino')"
                                    >
                                        <div class="card-image male-bg"></div>
                                        <div class="card-footer">
                                        <span class="arrow">></span> Homem
                                        </div>
                                    </button>
                                    </div>
                                </div>

                                <!-- Seção de privacidade e estatísticas -->
                                <div class="privacy-section">
                                    <p class="privacy-text">
                                    <span class="lock-icon">🔒</span>
                                    <strong>Privacidade Garantida:</strong> Suas respostas são 100% anônimas e confidenciais.
                                    </p>
                                    <p class="stats-text">Mais de 47.328 pessoas já descobriram seus bloqueios através deste teste.</p>
                                </div>
                                </div>
                            </div>


                            <div class="ms1" v-if="currentStep === 2">
                                <h2 class="main-title" style="font-size: 18px; margin-top: 40px"> Clique no mês em que você nasceu: </h2>
                               <div class="birth-date-month" style="display: flex; justify-content: center;">
                                    <ul class="birth-date-list">
                                        <button class="bs5829 date-item month-item" v-for="month in months" :key="month.number" @click="selectMonth(month)">
                                            {{ month.name }}
                                        </button>
                                    </ul>
                                </div>
                                <div class="navigation-container">
                                    <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                </div>
                            </div>

                            <div class="ms1" v-if="currentStep === 3">
                                <h2 class="main-title" style="font-size: 18px; margin-top: 40px""> Informe o Dia do seu Nascimento: </h2>
                                <div class="birth-date-month" style="display: flex; justify-content: center;">
                                    <ul class="birth-date-list">
                                        <button class="bs5829 date-item date-day" v-for="day in days" @click="selectDay(day)">
                                            {{ day }}
                                        </button>
                                    </ul>
                                </div>
                                <div class="navigation-container">
                                    <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                </div>
                            </div>

                            <div class="form-content" v-if="currentStep === 4">
                                <h2 class="main-title" style="font-size: 18px; margin-top: 40px"">Em qual Década você nasceu?</h2>
                                <div class="decade-selector" style="display: flex; justify-content: center;">
                                    <ul class="decade-grid">
                                        <li v-for="decade in decades" :key="decade"
                                            class="decade-grid-item">
                                            <button class="decade-button" :data-value="decade"
                                                @click="handleDecadeClick(decade)"
                                                :class="{'date-item': true, 'date-day': true, 'bs5829': true}">
                                                {{ decade }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navigation-container">
                                    <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                </div>
                            </div>
                            
                            <div class="form-content" v-if="currentStep === 5">
                                <h2 class="main-title" style="font-size: 18px; margin-top: 40px">Em que Ano você nasceu?</h2>
                                <div class="year-selector">
                                    <ul class="year-grid">
                                        <li v-for="year in years" :key="year"
                                            class="year-grid-item">
                                            <button class="year-button" :data-value="year"
                                                @click="selectYear(year)"
                                                :class="{'date-item': true, 'date-day': true, 'bs5829': true}">
                                                {{ year }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navigation-container">
                                    <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                </div>
                            </div>

                            <div class="s7s1238s7sd30007600000 form-content" v-if="currentStep === 6">
                                <div class="input-control ffn312312900nbn432420000">
                                    <p class="titulo-sesao" style="=margin-top: 40px">Qual é o seu Estado Civil?</p>
                                    <div class="div-status-civil">
                                        <ul class="list-status-civil">
                                            <button class="botao-civil date-item" @click="selectStatusCivil('casado')" :class="{ 'highlight': civilStatusValue === 'casado' }">
                                                <img src="../assets/estado_civil/casado.png"><br>
                                                Casado(a)
                                            </button>
                                            <button class="botao-civil date-item" @click="selectStatusCivil('namorando')" :class="{ 'highlight': civilStatusValue === 'namorando' }">
                                                <img src="../assets/estado_civil/namorando.png">
                                                <br>
                                                Namorando
                                            </button>
                                            <button class="botao-civil date-item" @click="selectStatusCivil('noivo')" :class="{ 'highlight': civilStatusValue === 'noivo' }">
                                                <img src="../assets/estado_civil/noivo.png"><br>
                                                Noivo(a)
                                            </button>
                                            <button class="botao-civil date-item" @click="selectStatusCivil('solteiro')" :class="{ 'highlight': civilStatusValue === 'solteiro' }">
                                                <img src="../assets/estado_civil/solteiro.png">
                                                <br>
                                                Solteiro(a)
                                            </button>
                                            <button class="botao-civil date-item" @click="selectStatusCivil('separado')" :class="{ 'highlight': civilStatusValue === 'separado' }">
                                                <img src="../assets/estado_civil/separado.png"><br>
                                                Separado(a)
                                            </button>
                                            <button class="botao-civil date-item" @click="selectStatusCivil('viuvo')" :class="{ 'highlight': civilStatusValue === 'viuvo' }">
                                                <img src="../assets/estado_civil/viuvo.png">
                                                <br>
                                                Viúvo(a)
                                            </button>
                                        </ul>
                                    </div>
                                    <div class="navigation-container">
                                    <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                </div>
                                </div>
                            </div>

                            <div class="s7s1238s7sd30007600000 form-content" v-if="currentStep === 7">
                                <div class="input-control ffn312312900nbn432420000">
                                    <p class="titulo-sesao" style="=margin-top: 40px">Qual o maior desafio da sua vida nesse momento?</p>
                                    <div class="birth-date-month">
                                        <ul class="birth-date-list" style="max-width: 100% !important">
                                            <div class="row" style="row-gap: 20px !important; gap: none !important;">
                                                <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                    <button class="botao-desafio date-item" @click="selectDesafio('amor')" :class="{ 'highlight': desafioValue === 'amor' }">
                                                        <img src="../assets/desafios/engagament.png"><br>
                                                        Vida Amorosa
                                                    </button>
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                    <button class="botao-desafio date-item" @click="selectDesafio('financas')" :class="{ 'highlight': desafioValue === 'financas' }">
                                                        <img src="../assets/desafios/money-bag.png">
                                                        <br>
                                                        Finanças
                                                    </button>
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                    <button class="botao-desafio date-item" @click="selectDesafio('saude')" :class="{ 'highlight': desafioValue === 'saude' }">
                                                        <img src="../assets/desafios/healthcare.png"><br>
                                                        Saúde
                                                    </button>
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                    <button class="botao-desafio date-item" @click="selectDesafio('felicidade')" :class="{ 'highlight': desafioValue === 'felicidade' }">
                                                        <img src="../assets/desafios/happiness.png">
                                                        <br>
                                                        Felicidade
                                                    </button>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="navigation-container">
                                        <btn @click="handleBackBtnMoonSign()" class="btn-voltar">< Voltar</btn>
                                    </div>
                                </div>
                            </div>

                            <div class="s7s1238s7sd30007600000 form-content" v-if="currentStep === 8">
                                <div class="quiz-container">
                                    <h2 class="main-title" style="font-size: 18px; margin-top: 40px">Qual é o seu Primeiro Nome?</h2>
                                    <div class="name-input-section">
                                        <input type="text" id="f131238918284" value="" v-model="firstName" @change="handleFieldFirstName" class="field-input" placeholder="Digite seu nome" autocomplete="given-name">
                                        <div class="error-field" v-html="errorFieldMessage"></div>
                                    </div>
                                    <div class="form-button">
                                        <button class="button-form" @click="handleNome()">Clique
                                            Aqui Para Continuar!</button>
                                    </div>
                                </div>
                            </div>
              
                    </div>
                        <div class="sl31239199998773343" v-if="currentStep === 5.5">
                            <h3 style="color: #060606">Montando a sua leitura...</h3>
                            <div class="progress-bar">
                                <div class="progress-fill"></div>
                            </div>
                        </div>                            
                    </div>
                </section>


                <section class="sm1231231100002300000 eh90427" v-if="parte3">
                    <div class="hf-4920">
                        <p class="section-p" style="font-family: 'Sora', serif; margin-top: 40px; text-align: center">
                            Insira o seu <b>e-mail</b> para receber o restante da sua <b>leitura personalizada...</b>
                        </p>
                        </div>
                        <div class="rm00301293012000032900 form-content" style="min-height: 145px;">
                        <h3 style="font-family: 'Sora', serif; color: white; text-align: center">Qual é o seu Email? </h3>
                        <div class="input-control fc1391820000123000">
                            <input 
                            type="email" 
                            name="email-field" 
                            id="email-field" 
                            v-model="emailValue" 
                            class="field-input" 
                            placeholder="Insira o seu e-mail" 
                            autocomplete="email">
                            <div class="error-field" v-if="emailErrorMessage">{{ emailErrorMessage }}</div>
                        </div>
                        </div>
                        <div class="form-button" style="margin-bottom: 30px;">
                        <button 
                            class="button-form" 
                            style="font-family: 'Sora', serif; background: #19a10b !important" 
                            @click="validateEmail">
                            Clique para continuar
                        </button>
                    </div>
                </section>

                <section class="sm1231231100002300000 eh90427" v-if="parte4">
                    <div class="form-modal" style="background: none; border: none; box-shadow: none;">
                        <div class="form-button" style="margin-bottom: 30px;">
                            <button class="button-form pulsating-button"
                                style="font-family: 'Sora', serif; background: #19a10b !important; font-size: 2rem;"
                                @click="showPitch">
                                Quero fazer o Ritual Numerológico
                            </button>
                        </div>
                    </div>
                </section>

                <section class="ps03120003100000" style="height: 100vh; width: 100%" v-if="partePitch">
                    <div style="display: flex;justify-content: center;height: 100vh;align-content: flex-start;">
                        <!--<div id="vid_6841b662f59c67de93338696" style="position: relative; width: 100%; padding: 148.14814814814815% 0 0;"> <img id="thumb_6841b662f59c67de93338696" src="https://images.converteai.net/0a246cdd-c6bd-48cb-b2bf-d2a8c03c2dd5/players/6841b662f59c67de93338696/thumbnail.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; display: block;" alt="thumbnail"> <div id="backdrop_6841b662f59c67de93338696" style=" -webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px); position: absolute; top: 0; height: 100%; width: 100%; "></div> </div>
                    -->
                        <vturb-smartplayer id="vid-691b1f1bf65a4dcdb5b35980" style="display: block; margin: 0 auto; width: 100%; max-width: 400px;"></vturb-smartplayer>
                    </div>
                </section>

                <!-- Vídeo P1 -->
                <section class="video-p1-section" v-if="showP1Video">
                    <div id="personalized-video-p1" class="personalized-video-container"></div>
                </section>

                <!-- Vídeo P2 -->
                <section class="video-p2-section" v-if="showP2Video">
                    <div id="personalized-video-p2" class="personalized-video-container-p2"></div>
                </section>

                <!-- Modal de Email Optin -->
                <section id="email-optin-modal" class="parte2-fullscreen parte2-hidden">
                    <div class="form-modal" style="width: 100%; height: 100%; max-width: none; background-color: #4682B4; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <div class="hf-4920">
                            <p class="section-p" style="font-family: 'Sora', serif; margin-top: 40px; text-align: center">
                                Insira o seu <b>e-mail</b> para receber o restante da sua <b>leitura personalizada...</b>
                            </p>
                        </div>
                        <div class="form-content" style="min-height: 145px;">
                            <h4 style="font-family: 'Sora', serif; color: white; text-align: center">Qual é o seu Email?</h4>
                            <div class="input-control">
                                <input type="email" v-model="emailValue" class="field-input" placeholder="Insira o seu e-mail" autocomplete="email">
                                <div class="error-field" v-if="emailErrorMessage">{{ emailErrorMessage }}</div>
                            </div>
                        </div>
                        <div class="form-button" style="margin-bottom: 30px;">
                            <button class="button-form pulsating-button" style="font-family: 'Sora', serif; background: #19a10b !important" @click="validateEmail">
                                Clique para continuar
                            </button>
                        </div>
                    </div>
                </section>

                <section class="animation-section hide">
                    <div class="animation-container">
                        <div class="play-animation modal-warning">
                            <div class="content-warning">
                                <h3><br><span style="color: #ffdb60"></span>, a sua leitura vai expirar em breve.</h3>
                                <img src="../assets/stop.png" style="max-width: 250px;" alt="" />
                                <p>Esta é a sua última oportunidade de assistir até ao final. <br>
                                    Clique no botão abaixo…</p>
                            </div>
                            <button class="btn-play" style="background: #19a10b !important" @click="continuarVideo(textoWarning)">{{textoWarning}}</button>
                        </div>
                        <div class="modal-animation">
                            <div class="modal-audio-container" style="color: white"></div>
                        </div>
                    </div>
                </section>
                <div class="audio-modal" id="audio-astrology" v-show="showPlayer">
                    <div class="audio-astrology-container">
                        <audio id="my-player" class="video-js">
                            <source id="my-spanish-audio-track" src="" type="audio/ogg" />
                            <track kind="captions" src="#" srclang="br" label="Português" default />
                        </audio>
                    </div>
                    <div class="buttons-audio-container">
                        <button class="button-video start-pause-audio false" @click="pauseAudio">
                            <i class="fas fa-pause" v-if="pauseIcon == false"></i>
                            <i class="fas fa-play" v-if="pauseIcon == true"></i>
                        </button>
                        <button style="display: none;" class="button-video volume-video active">
                            <i class="fas fa-volume-up"></i>
                            <i class="fas fa-volume-off"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="loading-container" v-if="loadingBlock">
            <h3 style="color: white">A carregar a sua leitura numerológica...</h3>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
        <!--<audio loop="true" class="audio-loop">
            <source src="../assets/audio/fundo-loop-novo.mp3" />
        </audio>-->

        <!-- Footer com disclaimers e políticas -->
        <footer class="site-footer" v-if="section1">
            <div class="footer-container">
                <div class="footer-disclaimer">
                    <p class="disclaimer-text">
                        <strong>Aviso Legal:</strong> Este site não faz parte do Facebook ou do Meta. Além disso, NÃO somos endossados pelo Facebook de nenhuma maneira. FACEBOOK é uma marca registrada da Meta Platforms, Inc.
                    </p>
                    <p class="results-disclaimer">
                        Os resultados podem variar de pessoa para pessoa. Este conteúdo é apenas para fins de entretenimento e não substitui aconselhamento profissional financeiro, psicológico ou de saúde.
                    </p>
                </div>

                <div class="footer-links">
                    <span>Termos de Uso</span>
                    <span class="separator">|</span>
                    <span>Política de Privacidade</span>
                    <span class="separator">|</span>
                    <span>Contato</span>
                </div>

                <div class="footer-copyright">
                    <p>&copy; {{ new Date().getFullYear() }} - Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script src="../js/video.min.js"></script>
<script src="../js/astrology/moonCalc.js?y=827"></script>
<script src="../js/global.js"></script>

<script>
    import gsap from "gsap";
    import NoSleep from 'nosleep.js';
    import axios from 'axios';
    import {
        CSSPlugin
    } from "gsap/CSSPlugin";

    export default {
        name: 'TesteVSLNova',
        data() {
            return {
                funnelName: 'numerologia_br',
                videoStarted: false,
                utmPrefix: null,
                months: [
                    { name: 'Janeiro', number: '01', numerology: this.calculateNumerology('01'), animationText: '0+1' },
                    { name: 'Fevereiro', number: '02', numerology: this.calculateNumerology('02'), animationText: '0+2' },
                    { name: 'Março', number: '03', numerology: this.calculateNumerology('03'), animationText: '0+3' },
                    { name: 'Abril', number: '04', numerology: this.calculateNumerology('04'), animationText: '0+4' },
                    { name: 'Maio', number: '05', numerology: this.calculateNumerology('05'), animationText: '0+5' },
                    { name: 'Junho', number: '06', numerology: this.calculateNumerology('06'), animationText: '0+6' },
                    { name: 'Julho', number: '07', numerology: this.calculateNumerology('07'), animationText: '0+7' },
                    { name: 'Agosto', number: '08', numerology: this.calculateNumerology('08'), animationText: '0+8' },
                    { name: 'Setembro', number: '09', numerology: this.calculateNumerology('09'), animationText: '0+9' },
                    { name: 'Outubro', number: '10', numerology: this.calculateNumerology('10'), animationText: '1+0' },
                    { name: 'Novembro', number: '11', numerology: this.calculateNumerology('11'), animationText: '1+1' },
                    { name: 'Dezembro', number: '12', numerology: this.calculateNumerology('12'), animationText: '1+2' },
                ],
                desafioValue: null,
                animationMonthSum: null,
                animationMonthName: null,
                animationMonthNumerology: null,
                days: [],
                animationDaySum: null,
                animationDayName: null,
                animationDayNumerology: null,
                animationYearSum: null,
                animationYearName: null,
                animationYearNumerology: null,
                numeroDestinoAntes: null,
                numeroDestinoFormatado: null,
                numeroDestinoOficial: null,
                numeroExpressao: null,
                numeroPersonalidade: null,
                numeroAlma: null,
                completeName: null,

                selectedHour: "",
                selectedMinute: "",
                hourOptions: [],
                minuteOptions: [],
                currentStep: 1,
                noSleep: new NoSleep(),
                noSleepEnabled: false,
                elements: {},
                signValue: null,
                moonSign: null,
                moonPhases: null,
                moonPhasesPath: null,
                moonSignStep: 1,
                MoonPhasesStep: 1,
                monthValue: null,
                monthNameValue: null,
                dayValue: null,
                decadeValue: null,
                yearValue: null,
                dateValue: null,
                ageUserValue: null,
                hoursFieldIsTrue: false,
                hoursBirthdate: null,
                hoursValue: undefined,
                minutesValue: undefined,
                countryValue: null,
                firstName: '',
                errorFieldMessage: '',
                firstNameValue: undefined,
                countrySelectorIsTrue: false,
                isCountryModalActive: false,
                countries: [
                    { name: "Argentina", value: "Argentina", flag: "../imgs/astrology/flags/ar.svg" },
                    { name: "Canadá", value: "Canadá", flag: "../imgs/astrology/flags/ca.svg" },
                    { name: "Chile", value: "Chile", flag: "../imgs/astrology/flags/cl.svg" },
                    { name: "Colômbia", value: "Colômbia", flag: "../imgs/astrology/flags/co.svg" },
                    { name: "Equador", value: "Equador", flag: "../imgs/astrology/flags/ec.svg" },
                    { name: "Espanha", value: "Espanha", flag: "../imgs/astrology/flags/es.svg" },
                    { name: "Japão", value: "Japão", flag: "../imgs/astrology/flags/jp.svg" },
                    { name: "Paraguay", value: "Paraguay", flag: "../imgs/astrology/flags/pr.svg" },
                    { name: "Portugal", value: "Portugal", flag: "../imgs/astrology/flags/pt.svg" },
                    { name: "EUA", value: "EUA", flag: "../imgs/astrology/flags/us.svg" },
                    { name: "Uruguay", value: "Uruguay", flag: "../imgs/astrology/flags/uy.svg" },
                    { name: "Outro", value: "Outro", flag: "" }
                ],
                firstNameValue: null,
                genderValue: null,
                civilStatusValue: null,
                emailValue: null,
                emailErrorMessage: null,
                lastDecade: null,
                srcAudio: null,
                formsSectionsArray: [],
                pathCard: "assets/imgs/card.png",
                activeSign: null,
                startDateField: null,
                endDateField: null,
                varListInitialDays: [],
                varListEndDays: [],
                decades: [],
                decadeValue: null,
                lastDecade: null,
                years: [],
                yearValue: null,
                moonDataJS: null,
                playerVideo: null,
                modelVH: null,
                modelVW: null,
                animation: null,
                formsSections: null,
                animationTimeLine: null,
                animation: null,
                _targets: [],
                genderInputMan: null,
                genderInputWoman: null,
                genderValue: null,
                modalActive: false,
                selectedStatus: '',
                statuses: [
                    { name: "Casado(a)", img: "../assets/imgs/casado.png"},
                    { name: "Namorando", img: "../assets/imgs/namorando.png"},
                    { name: "Noivo(a)", img: "../assets/imgs/noivo.png"},
                    { name: "Solteiro(a)", img: "../assets/imgs/solteiro.png"},
                    { name: "Separado(a)", img: "../assets/imgs/divorciado.png"},
                    { name: "Viúvo(a)", img: "../assets/imgs/viuvo.png"},
                ],
                moonSignCerto: null,
                pauseIcon: false,
                textoWarning: 'COMEÇAR',
                backgroundVSL: false,
                h2: true,
                parte2: false,
                parteDoisSexo: true,
                parteDoisNomeCompleto: false,
                parte3: false,
                parte31: false,
                parte32: false,
                parte4: false,
                cta: false,
                showPlayer: false,
                loadingBlock: false,
                section1: true,
                numMonth: null,
                partePitch: null,

                // Sistema de Vídeos Personalizados VTurb
                currentVideoId: null,
                showP1Video: false,
                vturbAccountId: '141468aa-0e0b-4b46-b784-a9403b5f9a1c',
                videoMapP1: {
                    'H_20_S': '6aca7f406cde7bc69e693a15',
                    'H_20_C': '6aca7f9340d1252ebf47d44e',
                    'H_30_S': '6aca7f9b8c841663bd8bfdd0',
                    'H_30_C': '6aca7f384586075a08abd05b',
                    'H_40_S': '6aca7f18b53d557a78abf2c4',
                    'H_40_C': '6aca7efb6cc3ddc3e5976a3d',
                    'H_50_S': '6aca7f0f3e621d4fce9c9aed',
                    'H_50_C': '6aca7f0855229e07c5654f9d',
                    'H_60_S': '6aca7f20b53d557a78abf2db',
                    'H_60_C': '6aca7f013e621d4fce9c9ad1',
                    'M_20_S': '6aca7f31a50c0aae35d4728d',
                    'M_20_C': '6aca7f624731787c32f92714',
                    'M_30_S': '6aca7f295cf0c3106408666b',
                    'M_30_C': '6aca7f803e621d4fce9c9b51',
                    'M_40_S': '6aca7f5ae6574b13f0d06c78',
                    'M_40_C': '6aca7f473df4b8e43b4338a7',
                    'M_50_S': '6aca7f72e6574b13f0d06c99',
                    'M_50_C': '6aca7f8c6a1c023d5c533ace',
                    'M_60_S': '6aca7f506cde7bc69e693a28',
                    'M_60_C': '6aca7fa455229e07c5655037'
                },

                currentVideoIdP2: null,
                showP2Video: false,
                videoMapP2: {
                    'dinheiro': '6aca7cb46a1c023d5c53389c',
                    'felicidade': '6aca8464b53d557a78abfffd',
                    'saude': '6aca8268e6574b13f0d07410',
                    'h_casado': '6aca850c6cde7bc69e694840',
                    'h_solteiro': '6aca82fd8c841663bd8c06b4',
                    'm_casada': '6aca81d03df4b8e43b433f20',
                    'm_solteira': '6aca813414f965042387a2ae'
                }
            };
        },
        mounted() {
            gsap.registerPlugin(CSSPlugin);
            gsap.ticker.lagSmoothing(0);
            this.trackQuizStep(0, 'view_intro');
            this.generateHourOptions();
            this.generateMinuteOptions();
            this.elements = {
                sectionMoonPhases: document.querySelector(".section-moon-phases"),
                sectionMoonReading: document.querySelector(".sm1231231100002300000"),
                sectionPitch: document.querySelector(".ps03120003100000"),
                sectionCta: document.querySelector(".cc13912839119900000"),
                sectionAnimation: document.querySelector(".animation-section"),
                audioBar: document.querySelector("#audio-astrology"),
                audioElement: document.querySelector("#audio-astrology #my-player"),
                audioSection: document.querySelector("#audio-astrology .start-pause-audio"),
                buttonPlayAudio: document.querySelector("#audio-astrology .start-pause-audio"),
                buttonVolumeAudio: document.querySelector("#audio-astrology .volume-video"),
                modalElement: document.querySelector(".modal-audio-container"),
                audioLoop: document.querySelector(".audio-loop")
            };

            this.formsSectionsArray = [{
                    name: "[form1]",
                    section: this.elements.sectionMoonPhases
                },
                {
                    name: "[form3]",
                    section: this.elements.sectionMoonReading
                },
                {
                    name: "[form4]",
                    section: this.elements.sectionPitch
                },
                {
                    name: "[cta]",
                    section: this.elements.sectionCta
                }
            ];

            this.noSleep.enable(); // Ativa o NoSleep
            this.noSleepEnabled = true;

            if (this.$posthog) {
                this.$posthog.capture('$pageview', {
                    page_name: this.$options.name,
                    page_path: this.$route.path,
                    funnel_name: this.funnelName,
                    utm_prefix: this.utmPrefix
                });
            }
        },
        methods: {
            selectMonth(month){
                this.animationMonthSum = month.animationText;
                this.animationMonthName = month.name;
                this.animationMonthNumerology = month.numerology;

                this.generateDays(month.number);

                this.numMonth = month.number;

                this.trackQuizStep(2, 'month_selected');
                this.currentStep = 3;
            },
            selectDay(number){
                this.animationDaySum = this.formatDayWithPlus(number),
                this.animationDayName = number;
                this.animationDayNumerology = this.calculateNumerology(number);

                this.trackQuizStep(3, 'day_selected');
                this.currentStep = 4;
                this.generatorDecade();
            },
            selectYear(number){
                this.animationYearSum = this.formatYearWithPlus(number),
                this.animationYearName = number;
                this.animationYearNumerology = this.calculateNumerology(number);
                this.trackQuizStep(5, 'year_selected');
                this.currentStep = 6;

                this.yearValue = number;

                this.numeroDestinoAntes = this.animationYearNumerology + this.animationDayNumerology + this.animationMonthNumerology;
                this.numeroDestinoFormatado = this.formatYearWithPlus(this.numeroDestinoAntes);
                this.numeroDestinoOficial = this.calculateNumerology(this.numeroDestinoAntes);

                this.dateValue = this.formatDate(this.animationDayName, this.numMonth, this.animationYearName);
            },
            formatDate(day, month, year) {
                // Formatar a data como "DD/MM/YYYY"
                return `${day.toString().padStart(2, '0')}/${month.toString().padStart(2, '0')}/${year}`;
            },
            formatDayWithPlus(day) {
                // Converte o dia para string e insere um '+' entre os caracteres
                return day.split('').join('+');
            },
            formatYearWithPlus(year) {
                // Converte o ano para string e insere um '+' entre os caracteres
                return year.toString().split('').join('+');
            },
            calculateNumerology(number) {
                // Primeiro, garante que o número é uma string
                const numberStr = number.toString();
                // Então, divide a string em seus caracteres, converte cada um de volta para número e os soma
                return numberStr.split('').reduce((acc, curr) => acc + parseInt(curr), 0);
            },
            generateDays(month) {
                const year = new Date().getFullYear(); // Current year, can be changed as needed
                const daysInMonth = new Date(year, month, 0).getDate(); // Get the number of days in the month
                this.days = [];
                for (let i = 1; i <= daysInMonth; i++) {
                    // Convert the number to a string and pad with '0' if necessary
                    this.days.push(i.toString().padStart(2, '0')); // Ensure it has at least two digits
                }
            },

            handleBackBtnMoonSign() {
                if (this.currentStep > 1) {
                    this.currentStep--;
                }
            },
            generateHourOptions() {
                let hours = [];
                for (let hour = 0; hour < 24; hour++) {
                    const formattedHour = hour < 10 ? `0${hour}` : hour;
                    hours.push(formattedHour);
                }
                this.hourOptions = hours;
            },
            generateMinuteOptions() {
                let minutes = [];
                for (let minute = 0; minute < 60; minute++) {
                    const formattedMinute = minute < 10 ? `0${minute}` : minute;
                    minutes.push(formattedMinute);
                }
                this.minuteOptions = minutes;
            },

            handleNome() {
                if (!this.firstNameValue) {
                    alert("Campo do primeiro nome inválido!");
                    return;
                }
                this.trackQuizStep(8, 'name_submitted');
                const alertModal = document.querySelector(".modal-warning .content-warning h3 span");
                alertModal.innerHTML = this.firstNameValue;
                this.section1 = false;

                this.loadingBlock = true;

                this.formNumeroDestinoCompleted();
            },

            async formNumeroDestinoCompleted() {
                this.backgroundVSL = true;

                // Carrega a VSL curta personalizada P1 da VTurb
                setTimeout(() => {
                    this.loadingBlock = false;
                    this.loadPersonalizedVideoP1();
                }, 2000);

                // Código antigo mantido para referência (não é mais usado)
                /*
                let genderPath = this.genderValue === "masculino" ? "h" : "m";
                let civilStatusChar = this.getCharCivilStatus(this.civilStatusValue);
                this.ageUserValue = this.getAgeUser();
                let ageFormatted = this.getAgeUserFormat(this.ageUserValue);

                console.log(genderPath, civilStatusChar, ageFormatted);

                const audioPath = "../audio/p1/" + genderPath + "_" + ageFormatted + "_" + civilStatusChar + ".mp3";
                const animationPath = "../animations/p1/" + genderPath + "_" + ageFormatted + "_" + civilStatusChar + ".json";
                const legendPath = "../legends/p1/" + genderPath + "_" + ageFormatted + "_" + civilStatusChar + ".vtt";

                const jsonData = await this.getJsonData(animationPath);

                setTimeout(() => {
                    this.showPlayer = true;
                    this.elements.sectionAnimation.classList.remove("hide");
                    this.elements.audioSection.classList.remove("hide");
                    this.elements.audioBar.classList.remove("hide");
                    this.loadingBlock = false;
                    this.elements.sectionAnimation.classList.remove("hide");

                    if (jsonData) {
                        this.generatorAnimation(jsonData);
                    }
                }, 2000);

                await this.handleVideo(audioPath, legendPath, this.elements.audioElement);
                await this.handleStartVideo(true);
                this.handleFormsSections(this.formsSectionsArray);
                */
            },
            handleFieldFirstName() {
                const value = this.firstName;
                const numberPattern = /[0-9]/;
                const multipleNamesPattern = /[a-z]+[ ]+[a-z]/g;

                if (numberPattern.test(value)) {
                    this.errorFieldMessage = "*Apenas letras são permitidas!";
                    this.firstNameValue = undefined;
                    return;
                }
                if (multipleNamesPattern.test(value)) {
                    this.errorFieldMessage = "*Apenas o primeiro nome!";
                    this.firstNameValue = undefined;
                    return;
                }
                this.errorFieldMessage = "";
                const valueFormated = value.replace(/ /g, "");
                this.firstNameValue = valueFormated;
            },
            handleEmailEmailValidations(field) {
                let emailRegex = /^([A-Za-z0-9._-])+@([A-Za-z0-9_-])+\.([A-Za-z]{2,4})$/;
                const validationEmail = document.querySelector(".validation-email");
                if (!emailRegex.test(field.value)) {
                    validationEmail.classList.remove("hide");
                    this.emailValue = undefined
                } else {
                    validationEmail.classList.add("hide");
                    this.emailValue = field.value
                }
            },
            handleClickMoonPhases() {
                if (!this.moonPhasesPath) {
                    alert("O campo da fase lunar está vazio!");
                    return
                }
                const stepFiveMoonReading = document.querySelector(".sing-moon-reading-step-fifth");
                const stepFiveMoonPhases = document.querySelector(".sing-moon-reading-step-six");
                stepFiveMoonReading.classList.add("hide");
                stepFiveMoonPhases.classList.remove("hide");
                this.MoonPhasesStep = 6
            },
            continuarVideo(texto){
                if(texto == 'COMEÇAR'){
                    this.textoWarning = 'CONTINUAR';
                }

                this.pauseIcon = false;

            },
            pauseAudio() {
                if(this.pauseIcon == true){
                    this.pauseIcon = false;
                }else{
                    this.pauseIcon = true;
                }

                const modalWarning = document.querySelector('.modal-warning');

                modalWarning.classList.remove('hide');

                this.handlePlayVideo();
            },
            initGSAPAnimation(path, data) {
                gsap.timeline({
                    defaults: {
                        duration: 1
                    },
                    onStart: () => {
                        this.loadingBlock = false;
                    }
                }).to("#path", {
                    duration: 1,
                    attr: {
                        d: path
                    }
                }).fromTo(data, {
                    opacity: 0,
                    y: 100
                }, {
                    opacity: 1,
                    y: 0,
                    stagger: 0.1
                })
            },
            getJsonData(path) {
                return fetch(path).then((response) => {
                    return response.json()
                }).then((data) => {
                    return data
                }).catch((error) => {
                    console.error(error);
                    return []
                })
            },
            handleButtonSignClick(signo, event) {

                this.h2 = false;

                const buttons = document.querySelectorAll('.bs5829');
                buttons.forEach(button => {
                    button.classList.remove('active');
                });

                // Adicione a classe 'active' ao botão clicado
                event.currentTarget.classList.add('active');

                this.signValue = signo;
                //this.buttonActiveSign();
                this.handleClickMoonSign();
            },
            generatorDates() {
                switch (this.signValue) {
                    case "Áries":
                        this.daysList(2, 21, 19);
                        break;
                    case "Touro":
                        this.daysList(3, 20, 20);
                        break;
                    case "Gêmeos":
                        this.daysList(4, 21, 21);
                        break;
                    case "Câncer":
                        this.daysList(5, 22, 22);
                        break;
                    case "Leão":
                        this.daysList(6, 23, 22);
                        break;
                    case "Virgem":
                        this.daysList(7, 23, 22);
                        break;
                    case "Libra":
                        this.daysList(8, 23, 22);
                        break;
                    case "Escorpião":
                        this.daysList(9, 23, 21);
                        break;
                    case "Sagitário":
                        this.daysList(10, 22, 21);
                        break;
                    case "Capricórnio":
                        this.daysList(11, 22, 19);
                        break;
                    case "Aquário":
                        this.daysList(0, 20, 18);
                        break;
                    case "Peixes":
                        this.daysList(1, 19, 20);
                        break;
                    default:
                        break;
                }
            },
            daysList(month, startDay, endDay) {
                const currentYear = new Date().getFullYear();
                const startDate = new Date(currentYear, month, startDay);
                const nextMonth = month === 11 ? 0 : month + 1;
                const endDate = new Date(currentYear, nextMonth, endDay);

                this.listDays(startDate.getMonth(), startDate.getDate(), "start");
                this.listDays(endDate.getMonth(), endDate.getDate(), "end");
            },
            listDays(month, days, type) {
                const monthName = this.getMonthName(month);
                if (type === "start") {

                    const startDaysField = document.querySelector(".id2938 .dt948389 ul");
                    this.startDateField = monthName.name;
                    this.varListInitialDays = [];
                    for (let i = days; i <= monthName.days; i++) {
                        this.varListInitialDays.push(i);
                    }
                }

                const endDaysField = document.querySelector(".id784738 .dt948389 ul");
                this.endDateField = monthName.name;
                this.varListEndDays = [];
                for (let i = 1; i <= days; i++) {
                    this.varListEndDays.push(i);
                }
            },
            handleDayClick(day, type) {
                let selectedDayElement = document.querySelector(`li[data-value='${day}']`);
                if (selectedDayElement.classList.contains("active")) {
                    selectedDayElement.classList.remove("active");
                    this.monthValue = undefined;
                    this.monthNameValue = undefined;
                    this.dayValue = null;
                    return;
                }
                this.monthNameValue = type === 'start' ? this.startDateField : this.endDateField;
                this.monthValue = this.monthValue;
                this.dayValue = day;
                selectedDayElement.classList.add("active");
                this.dayActiver();
                this.handleClickMoonSign();
            },
            dayActiver() {
                const startOptions = document.querySelectorAll(".start-days option");
                const endOptions = document.querySelectorAll(".end-days option");
                const allOptions = [...startOptions, ...endOptions];
                allOptions.forEach(option => {
                    if (Number(option.getAttribute("data-value")) === this.dayValue) {
                        option.classList.add("active");
                    } else {
                        option.classList.remove("active");
                    }
                });
            },
            getMonthName(month) {
                let monthObj = {};
                switch (month) {
                    case 0:
                        monthObj.name = "Janeiro";
                        monthObj.days = 31;
                        return monthObj;
                    case 1:
                        monthObj.name = "Fevereiro";
                        monthObj.days = 29;
                        return monthObj;
                    case 2:
                        monthObj.name = "Março";
                        monthObj.days = 31;
                        return monthObj;
                    case 3:
                        monthObj.name = "Abril";
                        monthObj.days = 30;
                        return monthObj;
                    case 4:
                        monthObj.name = "Maio";
                        monthObj.days = 31;
                        return monthObj;
                    case 5:
                        monthObj.name = "Junho";
                        monthObj.days = 30;
                        return monthObj;
                    case 6:
                        monthObj.name = "Julho";
                        monthObj.days = 31;
                        return monthObj;
                    case 7:
                        monthObj.name = "Agosto";
                        monthObj.days = 31;
                        return monthObj;
                    case 8:
                        monthObj.name = "Setembro";
                        monthObj.days = 30;
                        return monthObj;
                    case 9:
                        monthObj.name = "Outubro";
                        monthObj.days = 31;
                        return monthObj;
                    case 10:
                        monthObj.name = "Novembro";
                        monthObj.days = 30;
                        return monthObj;
                    case 11:
                        monthObj.name = "Dezembro";
                        monthObj.days = 31;
                        return monthObj;
                    default:
                        break;
                }
            },
            generatorDecade() {
                const currentYear = new Date().getFullYear() - 10;
                const decades = [];
                for (let i = 1910; i <= currentYear; i += 10) {
                    decades.push(i);
                    this.lastDecade = i;
                }
                this.decades = decades;
            },
            handleDecadeClick(decade) {
                if (this.decadeValue === decade) {

                } else {
                    this.decadeValue = decade;
                }
                this.trackQuizStep(4, 'decade_selected');
                this.currentStep = 5;
                this.generatorYears();
            },
            generatorYears() {
                const currentYear = new Date().getFullYear() - 10;
                const currentYearLastDigit = Number(String(currentYear).slice(2));
                const startYear = currentYearLastDigit > 10 ? currentYearLastDigit - 9 : currentYearLastDigit === 10 ?
                    0 : currentYearLastDigit;
                const endYear = this.decadeValue === this.lastDecade ? this.decadeValue + startYear : this.decadeValue +
                    10;

                const years = [];
                for (let i = this.decadeValue; i < endYear; i++) {
                    years.push(i);
                }
                this.years = years;
            },
            handleYearClick(year) {
                if (this.yearValue === year) {

                } else {
                    this.yearValue = year;
                }
                this.handleYearActive();
                this.handleClickMoonSign();
            },
            handleYearActive() {
                const yearOptions = document.querySelectorAll(".o132921");
                yearOptions.forEach(option => {
                    if (Number(option.getAttribute("data-value")) === this.yearValue) {
                        option.classList.add("active");
                    } else {
                        option.classList.remove("active");
                    }
                });
            },
            backBornGringo(){
                this.countrySelectorIsTrue = false;
                this.isCountryModalActive = false;
                this.countryValue = "";

                const askCountry = document.querySelector(".cq194839829328");
                const selectorCountry = document.querySelector(".clc1328919388");

                askCountry.classList.remove("hide");
                selectorCountry.classList.add("hide");
            },
            backPreencherHoras(){
                const formContainer = document.querySelector(".stf3132189319 .hqt13812938198");
                const moonSignButton = document.querySelector(".stf3132189319 .hbc12391949");

                formContainer.classList.remove("hide");
                moonSignButton.classList.add("hide");
            },
            stepFiveQuestion(bool) {
                const formContainer = document.querySelector(".stf3132189319 .hqt13812938198");
                const moonSignButton = document.querySelector(".stf3132189319 .hbc12391949");
                const backButton = document.querySelector(".stf3132189319 .hbc12391949 .step-hours-vl43829");

                if (bool == 'Sim') {
                    this.hoursFieldIsTrue = true;
                    formContainer.classList.add("hide");
                    moonSignButton.classList.remove("hide");
                } else {
                    this.handleClickMoonSign();
                }

                backButton.onclick = () => {
                    this.hoursFieldIsTrue = false;
                    formContainer.classList.remove("hide");
                    moonSignButton.classList.add("hide");
                };
            },
            toggleModal(type) {
                const modal = document.querySelector(`.${type}-modal`);
                modal.classList.toggle("active");
            },
            handleModalActive(options, field, value) {
                Array.from(options).forEach(option => {
                    if (option.getAttribute("data-value") == value) {
                    option.classList.add("active");
                    return;
                    }
                    option.classList.remove("active");
                    setTimeout(() => {
                    field.classList.remove("active");
                    }, 500);
                });
            },
            handleMinutesModal() {
                const minutesModal = document.querySelector(".minutes-modal");
                const minutesModalHead = document.querySelector(".minutes-modal .minutes-modal-head");
                const minutesField = document.querySelector(".minutes-modal #minutes-field");
                const minutesList = document.querySelector(".minutes-modal .modal-minutes-list");
                let minutesArray = [];

                for (let i = 0; i <= 60; i++) {
                    minutesArray.push(i);
                }

                let minutesElements = minutesArray.map((minute) => {
                    const li = document.createElement("li");
                    const minuteString = String(minute);
                    const formattedMinute = minute < 10 ? ("0" + minuteString) : minuteString;
                    li.setAttribute("data-value", formattedMinute);
                    li.innerHTML = formattedMinute;
                    return li;
                });

                minutesElements.forEach((minuteElement) => {
                    minutesList.appendChild(minuteElement);
                    minuteElement.onclick = () => {
                    if (minuteElement.classList.contains("active")) {
                        minutesField.value = "";
                        this.minutesValue = undefined;
                        minuteElement.classList.remove("active");
                        return;
                    }
                    minutesField.value = minuteElement.getAttribute("data-value");
                    this.minutesValue = minuteElement.getAttribute("data-value");
                    this.handleModalActive(minutesList.childNodes, minutesModal, this.minutesValue);
                    };
                });
            },
            handleHoursModal() {
                const hoursModal = document.querySelector(".hours-modal");
                const hoursModalHead = document.querySelector(".hours-modal .hours-modal-head");
                const hoursField = document.querySelector(".hours-modal #hours-field");
                const hoursList = document.querySelector(".hours-modal .modal-hours-list");
                let hoursArray = [];

                for (let i = 0; i <= 23; i++) {
                    hoursArray.push(i);
                }

                let hoursElements = hoursArray.map((hour) => {
                    const li = document.createElement("li");
                    const hourString = String(hour);
                    const formattedHour = hour < 10 ? ("0" + hourString) : hourString;
                    li.setAttribute("data-value", formattedHour);
                    li.innerHTML = formattedHour;
                    return li;
                });

                hoursElements.forEach((hourElement) => {
                    hoursList.appendChild(hourElement);
                    hourElement.onclick = () => {
                    if (hourElement.classList.contains("active")) {
                        hoursField.value = "";
                        this.hoursValue = undefined;
                        hourElement.classList.remove("active");
                        return;
                    }
                    hoursField.value = hourElement.getAttribute("data-value");
                    this.hoursValue = hourElement.getAttribute("data-value");
                    this.handleModalActive(hoursList.childNodes, hoursModal, this.hoursValue);
                    };
                });
            },


            confirmHours(){
                if (this.selectedHour && this.selectedMinute) {
                    this.hoursBirthdate = this.selectedHour + ":" + this.selectedMinute;
                    this.handleClickMoonSign();
                    return;
                }
                alert("Preencha a hora completa");
                this.hoursBirthdate = undefined;
            },
            clickHoursModalHead(){
                const hoursModal = document.querySelector(".hours-modal");
                if (hoursModal.classList.contains("active")) {
                    hoursModal.classList.remove("active");
                    return;
                }
                hoursModal.classList.add("active");
            },
            handleButtonHoursConfirmn() {
                if (!this.hoursValue && !this.minutesValue) {
                    alert("Please fill in both hours and minutes.");
                    this.hoursBirthdate = undefined;
                }
                this.hoursBirthdate = this.hoursValue + ":" + this.minutesValue;
                this.handleClickMoonSign();
            },
            clickCountryButtonTrue(){
                this.countryValue = "Brasil";
                    this.handleClickMoonSign();
            },
            clickCountryButtonFalse(){
                this.countrySelectorIsTrue = true;
                this.isCountryModalActive = false;
                this.toggleCountryModal();
            },
            toggleCountryModal() {
                this.isCountryModalActive = !this.isCountryModalActive;
            },
            selectCountry(country) {
                this.countryValue = country.value;
                this.isCountryModalActive = false;
                this.handleClickMoonSign();
            },
            handleCountryModal() {
                const countryModal = document.querySelector(".cm4999d338388");
                const countryModalHead = document.querySelector(".cm4999d338388 .cm4999d338388-head");
                const countryField = document.querySelector(".cm4999d338388 #c14134ff423432");
                const countryListItems = document.querySelectorAll(".cm4999d338388 .cl41031000438830000 li");

                countryModalHead.onclick = () => {
                    if (countryModal.classList.contains("active")) {
                        countryModal.classList.remove("active");
                        return;
                    }
                    countryModal.classList.add("active");
                };

                countryListItems.forEach((countryItem) => {
                    countryItem.onclick = () => {
                        if (countryItem.classList.contains("active")) {
                            countryField.value = "";
                            this.countryValue = undefined;
                            countryItem.classList.remove("active");
                            return;
                        }
                        countryField.value = countryItem.getAttribute("data-value");
                        this.countryValue = countryItem.getAttribute("data-value");
                        this.handleClickMoonSign();
                        this.handleCountryActive(countryListItems, countryModal);
                    };
                });
            },
            handleCountryActive(countryListItems, countryModal) {
                countryListItems.forEach((countryItem) => {
                    if (countryItem.getAttribute("data-value") == this.countryValue) {
                        countryItem.classList.add("active");
                        return;
                    }
                    countryItem.classList.remove("active");
                    setTimeout(() => {
                        countryModal.classList.remove("active");
                    }, 500);
                });
            },

            goToParte2() {
                if (this.completeName === '') {
                    this.errorFieldMessage = 'Por favor, digite seu nome completo.';
                    return;
                }

                // Calcular o número de expressão
                this.numeroExpressao = this.calculateExpressionNumber(this.completeName);

                this.moonPhasesStepTwo();
            },

            calculateExpressionNumber(name) {
                const lettersToNumbers = {
                    'A': 1, 'J': 1, 'S': 1,
                    'B': 2, 'K': 2, 'T': 2,
                    'C': 3, 'L': 3, 'U': 3,
                    'D': 4, 'M': 4, 'V': 4,
                    'E': 5, 'N': 5, 'W': 5,
                    'F': 6, 'O': 6, 'X': 6,
                    'G': 7, 'P': 7, 'Y': 7,
                    'H': 8, 'Q': 8, 'Z': 8,
                    'I': 9, 'R': 9
                };
                
                // Remover espaços e transformar em letras maiúsculas
                name = name.replace(/\s+/g, '').toUpperCase();
                
                let sum = 0;
                for (let char of name) {
                    sum += lettersToNumbers[char] || 0;
                }
                
                // Reduzir a um único dígito
                while (sum > 9) {
                    sum = sum.toString().split('').reduce((acc, num) => acc + parseInt(num), 0);
                }
                
                return sum;
            },

            calculatePersonalityNumber() {
                const lettersToNumbers = {
                    'B': 2, 'C': 3, 'D': 4, 'F': 6, 'G': 7,
                    'H': 8, 'J': 1, 'K': 2, 'L': 3, 'M': 4,
                    'N': 5, 'P': 7, 'Q': 8, 'R': 9, 'S': 1,
                    'T': 2, 'V': 4, 'W': 5, 'X': 6, 'Y': 7,
                    'Z': 8
                };

                // Extrair as consoantes
                const consonants = this.completeName.replace(/[aeiou\s]/gi, '').toUpperCase();

                let sum = 0;
                for (let char of consonants) {
                    sum += lettersToNumbers[char] || 0;
                }
                
                // Reduzir a um único dígito
                while (sum > 9) {
                    sum = sum.toString().split('').reduce((acc, num) => acc + parseInt(num), 0);
                }
                
                this.numeroPersonalidade = sum;
            },

            calculateSoulNumber() {
                const lettersToNumbers = {
                    'A': 1, 'E': 5, 'I': 9, 'O': 6, 'U': 3, 'Y': 7
                };

                const vowels = this.completeName.replace(/[^aeiouy\s]/gi, '').toUpperCase();

                let sum = 0;
                for (let char of vowels) {
                    sum += lettersToNumbers[char] || 0;
                }
                
                while (sum > 9) {
                    sum = sum.toString().split('').reduce((acc, num) => acc + parseInt(num), 0);
                }
                
                this.numeroAlma = sum;
            },

            moonPhasesStepOne() {
                this.parteDoisSexo = false;
                this.parteDoisNomeCompleto = true;

                this.MoonPhasesStep = 2;
                this.moonPhasesCivilStatus();
            },

            // ========== Transição P1 → P2 ==========
            moonPhasesStepTwo() {
                this.hideEmailOptinModal();
                this.showP1Video = false;

                const oldScriptP1 = document.querySelector('script[data-vturb-p1]');
                if (oldScriptP1) oldScriptP1.remove();

                const oldPlayerP1 = document.querySelector('#personalized-video-p1 vturb-smartplayer');
                if (oldPlayerP1) oldPlayerP1.remove();

                this.currentVideoId = null;
                this.loadPersonalizedVideoP2();
            },

            async FormMoonPhasesIsCompleted() {
                // Método antigo mantido para compatibilidade, mas não é mais usado
                this.elements.audioBar.classList.remove("hide");
                this.showPlayer = true;

                let genderPath = this.userSex === "masculino" ? "homem" : "mulher";
                let estadoCivil = this.getCharCivilStatus(this.userCivilStatus);
                let pathP2;

                if(this.desafioValue == 'felicidade'){
                    pathP2 = 'felicidade';
                }else if(this.desafioValue == 'saude'){
                    pathP2 = 'saude';
                }else if(this.desafioValue == 'financas'){
                    pathP2 = 'dinheiro';
                }else if(this.desafioValue == 'amor'){
                    console.log(estadoCivil);
                    console.log(genderPath);
                    if(estadoCivil == 'c'){
                        if(genderPath == 'homem'){
                            pathP2 = 'h_casado';
                        }else if(genderPath == 'mulher'){
                            pathP2 = 'm_casada';
                        }
                    }else if(estadoCivil == 's'){
                        if(genderPath == 'homem'){
                            pathP2 = 'h_solteiro';
                        }else if(genderPath == 'mulher'){
                            pathP2 = 'm_solteira';
                        }

                    }
                }else{
                    pathP2 = 'dinheiro';
                }

                const audioPath = "../audio/p2/" + pathP2 + ".mp3";
                const animationPath = "../animations/p2/" + pathP2 + ".json";
                const legendPath = "../legends/p2/" + pathP2 + ".vtt";

                const jsonData = await this.getJsonData(animationPath);

                if (jsonData) {
                    this.elements.audioBar.classList.remove("hide");
                    this.elements.sectionAnimation.classList.remove("hide");
                    this.elements.audioSection.classList.remove("hide");
                    this.generatorAnimation(jsonData);
                }

                await this.handleVideo(audioPath, legendPath, this.elements.audioElement);
                await this.handleStartVideo();

            },
            moonPhasesGender(gender) {
                this.parteDoisSexo = true;
            },
            clickButtonGender(gender) {

                if (gender != null || gender != '') {

                    this.genderValue = gender;
                    this.currentStep = 2;

                    if (this.$posthog) {
                        this.$posthog.capture('sex_selected', {
                            sex: gender,
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix
                        });
                        this.$posthog.capture('quiz_progress', {
                            quiz_id: this.quizId,
                            step: 2,
                            status: 'sex_selected',
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix
                        });
                    }
                }

            },
            backEstadoCivil(){
                this.parteDoisSexo = true;
                this.parteDoisNomeCompleto = false;
            },
            moonPhasesCivilStatus() {
                this.selectedStatus = status;
                this.modalActive = false;
            },

            genderActive(options) {
                options.forEach(option => {
                    if (option.getAttribute("data-value") === this.genderValue) {
                        option.classList.add("active");
                        return;
                    }
                    option.classList.remove("active");
                });
            },
            civilStatusActive(options) {
                options.forEach(option => {
                    if (option.getAttribute("data-value") === this.civilStatusValue) {
                        option.classList.add("active");
                        return;
                    }
                    option.classList.remove("active");
                });
            },

            setStatusCivil(status){
                this.civilStatusValue = status;
                this.parte31 = false;
                this.parte32= true;
            },

            extractUtmPrefix(value) {
                // pega tudo antes do primeiro "|"
                const idx = value.indexOf("|");
                return idx === -1 ? value : value.slice(0, idx);
                },

            setCookie(name, value, { maxAgeSeconds = null, path = "/", sameSite = "Lax" } = {}) {
                let cookie = `${encodeURIComponent(name)}=${encodeURIComponent(value)}; path=${path}; SameSite=${sameSite}`;
                if (maxAgeSeconds) cookie += `; Max-Age=${maxAgeSeconds}`;
                // com https, também é bom: ; Secure
                document.cookie = cookie;
            },

            getCookie(name) {
                const key = `${encodeURIComponent(name)}=`;
                const parts = document.cookie.split("; ");
                for (const p of parts) {
                    if (p.indexOf(key) === 0) return decodeURIComponent(p.substring(key.length));
                }
                return null;
            },

            validateEmail() {
                const emailPattern = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;

                if (!emailPattern.test(this.emailValue)) {
                    this.emailErrorMessage = "Formato de email inválido.";

                } else {
                    // garante que temos o utmPrefix (tenta recuperar de storage/cookie se não veio agora)
                    if (!this.utmPrefix) {
                        try {
                        this.utmPrefix = sessionStorage.getItem("utm_prefix") || this.getCookie("utm_prefix") || null;
                        } catch (e) {
                        this.utmPrefix = this.getCookie("utm_prefix") || null;
                        }
                    }

                    this.tagId = 'V7vw5';

                    window.dataLayer = window.dataLayer || [];
                    dataLayer.push({ event: 'add_lead_signo' });


                    const url =
                        `https://worker-leads.vendasonlinemktdgtgm.workers.dev/capturar-lead?email=${encodeURIComponent(this.emailValue)}&name=${encodeURIComponent(this.firstNameValue)}&tagId=${encodeURIComponent(this.tagId)}${this.utmPrefix ? `&utm_prefix=${encodeURIComponent(this.utmPrefix)}` : ""}`;

                    try {
                        const response = axios.post(url);
                        this.moonPhasesStepTwo();
                        
                    } catch (error) {
                        this.moonPhasesStepTwo();
                        console.error('.', error);

                    }

                    if (this.$posthog) {
                        this.$posthog.capture('lead_conversion', {
                            email: this.emailValue,
                            first_name: this.firstNameValue,
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix,
                            sex: this.genderValue,
                            civil_status: this.userCivilStatus
                        });
                        this.$posthog.identify(this.emailValue, {
                            email: this.emailValue,
                            first_name: this.firstNameValue,
                            funnel_name: this.funnelName,
                            sex: this.genderValue,
                            civil_status: this.userCivilStatus,
                            utm_prefix: this.utmPrefix
                        });
                    }

                    this.emailErrorMessage = "";
                }
            },
            async showPitch() {
                this.partePitch = true;
                this.parte4= false;
                this.showPlayer = false;
                this.playerVideo.pause();

                if (this.$posthog) {
                    this.$posthog.capture('pitch_viewed', {
                        funnel_name: this.funnelName,
                        utm_prefix: this.utmPrefix
                    });
                }

                const script = document.createElement("script");
                script.src = "https://scripts.converteai.net/0a246cdd-c6bd-48cb-b2bf-d2a8c03c2dd5/players/691b1f1bf65a4dcdb5b35980/v4/player.js";
                script.async = true;
                document.head.appendChild(script);
            },
            getCharCivilStatus(civilStatus) {
                if (civilStatus === "solteiro" || civilStatus === "separado" || civilStatus === "viuvo") {
                    return "s";
                }
                if (civilStatus === "casado" || civilStatus === "namorando" || civilStatus === "noivo") {
                    return "c";
                }
                return "s";
            },
            getAgeUser() {
                const currentDate = new Date();
                const currentYear = currentDate.getFullYear();
                const currentMonth = currentDate.getMonth();
                const currentDay = currentDate.getDate();
                let age = currentYear - this.yearValue;
                if (this.monthValue > currentMonth) {
                    age -= 1;
                }
                if (this.monthValue === currentMonth) {
                    if (this.dayValue > currentDay) {
                        age -= 1;
                    }
                    return age;
                }
                return age;
            },
            getAgeUserFormat(age) {
                if (age < 20) {
                    return "20";
                } else if (age >= 20 && age < 30) {
                    return "30";
                } else if (age >= 30 && age < 40) {
                    return "40";
                } else if (age >= 40 && age < 50) {
                    return "50";
                } else if (age >= 50 && age < 60) {
                    return "60";
                }
                return "60";
            },

            // ========== P1 - Vídeo por Gênero, Idade e Estado Civil ==========
            getVideoKeyP1() {
                const userSexLower = (this.userSex || this.genderValue || '').toLowerCase();
                const gender = userSexLower === 'masculino' ? 'H' : 'M';
                const age = this.getAgeUser() || 25;
                const ageRange = this.getAgeUserFormat(age);
                const civilStatus = (this.userCivilStatus === 'casado' ||
                                      this.userCivilStatus === 'namorando' ||
                                      this.userCivilStatus === 'noivo') ? 'C' : 'S';
                return `${gender}_${ageRange}_${civilStatus}`;
            },

            getPersonalizedVideoIdP1() {
                const key = this.getVideoKeyP1();
                return this.videoMapP1[key] || this.videoMapP1['H_20_S'];
            },

            loadPersonalizedVideoP1() {
                const oldScript = document.querySelector('script[data-vturb-p1]');
                if (oldScript) oldScript.remove();

                const oldPlayer = document.querySelector('#personalized-video-p1 vturb-smartplayer');
                if (oldPlayer) oldPlayer.remove();

                const videoId = this.getPersonalizedVideoIdP1();
                this.currentVideoId = videoId;
                this.showP1Video = true;

                this.$nextTick(() => {
                    const container = document.querySelector('#personalized-video-p1');
                    if (container) {
                        const vturbElement = document.createElement('vturb-smartplayer');
                        vturbElement.id = `vid-${videoId}`;
                        vturbElement.style.cssText = 'display: block; margin: 0 auto; width: 100%; max-width: 400px;';

                        const placeholder = document.createElement('div');
                        placeholder.className = 'vturb-player-placeholder';
                        placeholder.style.cssText = 'position: relative; width: 100%; padding: 177.77777777777777% 0 0; z-index: 0; background-color: black;';

                        vturbElement.appendChild(placeholder);
                        container.appendChild(vturbElement);
                    }

                    const script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = `https://scripts.converteai.net/${this.vturbAccountId}/players/${videoId}/v4/player.js`;
                    script.async = true;
                    script.setAttribute('data-vturb-p1', 'true');
                    document.head.appendChild(script);

                    this.setupP1VideoEndListeners(videoId);
                });
            },

            setupP1VideoEndListeners(videoId) {
                const self = this;
                let p1Handled = false;

                const handleP1End = () => {
                    if (p1Handled) return;
                    p1Handled = true;
                    self.showEmailPopupAfterP1();
                };

                const messageHandler = (event) => {
                    if (event.data) {
                        const data = typeof event.data === 'string' ?
                            (() => { try { return JSON.parse(event.data); } catch(e) { return event.data; } })() :
                            event.data;

                        if (data.type === 'vturb:video-ended' ||
                            data.type === 'video-ended' ||
                            data.event === 'ended' ||
                            data.event === 'video-ended' ||
                            (data.smartplayer && data.smartplayer.event === 'ended')) {
                            handleP1End();
                            window.removeEventListener('message', messageHandler);
                        }
                    }
                };
                window.addEventListener('message', messageHandler);
                document.addEventListener('smartplayer:ended', handleP1End, { once: true });

                const checkSmartplayer = setInterval(() => {
                    if (window.smartplayer && typeof window.smartplayer.on === 'function') {
                        clearInterval(checkSmartplayer);
                        window.smartplayer.on('ended', handleP1End);
                    }
                }, 500);
                setTimeout(() => clearInterval(checkSmartplayer), 30000);
            },

            showEmailPopupAfterP1() {
                this.showEmailOptinModal();
            },

            showEmailOptinModal() {
                const modal = document.getElementById('email-optin-modal');
                if (modal) {
                    modal.classList.remove('parte2-hidden');
                    modal.style.display = 'flex';
                }
            },

            hideEmailOptinModal() {
                const modal = document.getElementById('email-optin-modal');
                if (modal) {
                    modal.classList.add('parte2-hidden');
                    modal.style.display = 'none';
                }
            },

            // ========== P2 - Vídeo por Desafio ==========
            getVideoKeyP2() {
                if (this.desafioValue === 'financas') return 'dinheiro';
                if (this.desafioValue === 'felicidade') return 'felicidade';
                if (this.desafioValue === 'saude') return 'saude';
                if (this.desafioValue === 'amor') {
                    const userSexLower = (this.userSex || this.genderValue || '').toLowerCase();
                    const gender = userSexLower === 'masculino' ? 'h' : 'm';
                    const civilStatus = (this.userCivilStatus === 'casado' ||
                                          this.userCivilStatus === 'namorando' ||
                                          this.userCivilStatus === 'noivo') ? 'casado' : 'solteiro';

                    if (gender === 'm' && civilStatus === 'casado') return 'm_casada';
                    if (gender === 'h' && civilStatus === 'casado') return 'h_casado';
                    if (gender === 'h' && civilStatus === 'solteiro') return 'h_solteiro';
                    if (gender === 'm' && civilStatus === 'solteiro') return 'm_solteira';
                }
                return 'dinheiro';
            },

            getPersonalizedVideoIdP2() {
                const key = this.getVideoKeyP2();
                return this.videoMapP2[key] || this.videoMapP2['dinheiro'];
            },

            loadPersonalizedVideoP2() {
                const oldScript = document.querySelector('script[data-vturb-p2]');
                if (oldScript) oldScript.remove();

                const oldPlayer = document.querySelector('#personalized-video-p2 vturb-smartplayer');
                if (oldPlayer) oldPlayer.remove();

                const videoId = this.getPersonalizedVideoIdP2();
                this.currentVideoIdP2 = videoId;
                this.showP2Video = true;

                // IDs com prefixo "ab-" são testes A/B da VTurb: embed e script têm outro formato
                const isAbTest = videoId.startsWith('ab-');

                this.$nextTick(() => {
                    const container = document.querySelector('#personalized-video-p2');
                    if (container) {
                        const vturbElement = document.createElement('vturb-smartplayer');
                        if (isAbTest) {
                            vturbElement.id = videoId;
                            vturbElement.style.cssText = 'display: block; margin: 0 auto; width: 100%;';
                        } else {
                            vturbElement.id = `vid-${videoId}`;
                            vturbElement.style.cssText = 'display: block; margin: 0 auto; width: 100%; max-width: 400px;';

                            const placeholder = document.createElement('div');
                            placeholder.className = 'vturb-player-placeholder';
                            placeholder.style.cssText = 'position: relative; width: 100%; padding: 177.77777777777777% 0 0; z-index: 0; background-color: black;';
                            vturbElement.appendChild(placeholder);
                        }
                        container.appendChild(vturbElement);
                    }

                    const script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = isAbTest
                        ? `https://scripts.converteai.net/${this.vturbAccountId}/ab-test/${videoId.slice(3)}/player.js`
                        : `https://scripts.converteai.net/${this.vturbAccountId}/players/${videoId}/v4/player.js`;
                    script.async = true;
                    script.setAttribute('data-vturb-p2', 'true');
                    document.head.appendChild(script);
                });
            },

            alert(message) {
                const alertBox = document.createElement("div");
                alertBox.classList.add("alert-message");
                const alertHTML = `<div class="alert-content">${message}</div>`;
                alertBox.innerHTML = alertHTML;
                document.body.append(alertBox);
                setTimeout(() => {
                    alertBox.remove();
                }, 2000);
            },

            handlePlayVideo() {
                if (this.elements.buttonPlayAudio.classList.contains("active")) {
                    this.playerVideo.pause();
                    this.animationTimeLine.pause();
                    this.elements.buttonPlayAudio.classList.remove("active");
                    this.elements.buttonPlayAudio.classList.add("paused");
                    if (this.$posthog) {
                        this.$posthog.capture('video_interaction', {
                            action: 'pause',
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix
                        });
                    }
                    return;
                }
                this.playerVideo.play();
                this.animationTimeLine.play();
                this.elements.buttonPlayAudio.classList.add("active");
                this.elements.buttonPlayAudio.classList.remove("paused");
                if (this.$posthog) {
                    if (!this.videoStarted) {
                        this.videoStarted = true;
                        this.$posthog.capture('video_started', {
                            action: 'play_button_clicked',
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix,
                            first_name: this.firstNameValue
                        });
                    } else {
                        this.$posthog.capture('video_interaction', {
                            action: 'resume',
                            funnel_name: this.funnelName,
                            utm_prefix: this.utmPrefix
                        });
                    }
                }
            },

            replaceContent(content, highlight) {

                if(this.moonSign == 'aries'){
                    this.moonSignCerto = 'Áries'
                } else if(this.moonSign == 'touro'){
                    this.moonSignCerto = 'Touro'
                }
                else if(this.moonSign == 'gemeos'){
                    this.moonSignCerto = 'Gêmeos'
                }
                else if(this.moonSign == 'leao'){
                    this.moonSignCerto = 'Leão'
                }
                else if(this.moonSign == 'virgem'){
                    this.moonSignCerto = 'Virgem'
                }
                else if(this.moonSign == 'libra'){
                    this.moonSignCerto = 'Libra'
                }
                else if(this.moonSign == 'escorpiao'){
                    this.moonSignCerto = 'Escorpião'
                }
                else if(this.moonSign == 'sagitario'){
                    this.moonSignCerto = 'Sagitário'
                }
                else if(this.moonSign == 'capricornio'){
                    this.moonSignCerto = 'Capricórnio'
                }
                else if(this.moonSign == 'aquario'){
                    this.moonSignCerto = 'Aquário'
                }
                else if(this.moonSign == 'peixes'){
                    this.moonSignCerto = 'Peixes'
                }


                const replacements = [{
                        "[nome]": highlight ? `<b>${this.firstNameValue}</b>` : this.firstNameValue
                    },
                    {
                        "[data-nascimento]": highlight ? `<b>${this.dateValue}</b>` : this.dateValue
                    },
                    {
                        "[signo]": highlight ? `<b>${this.signValue}</b>` : this.signValue
                    },
                    {
                        "[email]": highlight ? `<b>${this.emailValue}</b>` : this.emailValue
                    },
                    {
                        "[signo-lua]": highlight ? `<b>${this.moonSignCerto}</b>` : this.moonSignCerto
                    },
                    {
                        "[fase-lua]": highlight ? `<b>${this.moonPhases}</b>` : this.moonPhases
                    },
                    {
                        "[numero-destino]": highlight ? `<b>${this.numeroDestinoOficial}</b>` : this.numeroDestinoOficial
                    },
                    {
                        "[numero-expressão]": highlight ? `<b>${this.numeroExpressao}</b>` : this.numeroExpressao
                    },
                    {
                        "[numero-nascimento]": highlight ? `<b>${this.numeroDestinoOficial}</b>` : this.numeroDestinoOficial
                    },
                    {
                        "[numero-personalidade]": highlight ? `<b>${this.numeroPersonalidade}</b>` : this.numeroPersonalidade
                    },
                    {
                        "[numero-alma]": highlight ? `<b>${this.numeroAlma}</b>` : this.numeroAlma
                    }
                ];
                let replacedContent = content; 

                replacements.forEach(replacement => {
                    let [key, value] = Object.entries(replacement)[0];
                    if (typeof replacedContent === "string" || replacedContent instanceof String) {

                        replacedContent = replacedContent.replace(key, value);
                    }
                    else if (Array.isArray(replacedContent)) {
                        replacedContent = replacedContent.map(item => {
                            if (typeof item === "string" || item instanceof String) {
                                item = item.replace(key, value);
                            }
                            return item;
                        });
                    }
                });
                return replacedContent;
            },
            handleCta(section) {
                const target = section;

                if (String(target) == '[cta]') {
                    this.cta = true;
                }
                this.elements.sectionAnimation.classList.add('hide');
                this.elements.modalElement.innerHTML = '';
                this.animationTimeLine.kill();
            },
            formIsTrue(section) {

                const target = section;

                if(String(target) == '[form1]'){
                    this.parte3 = true;
                    this.showPlayer = false;
                }else if (String(target) == '[form3]') {
                    this.parte4 = true;
                    this.showPlayer = false;
                }

                this.elements.sectionAnimation.classList.add('hide');

                this.elements.modalElement.innerHTML = '';

                this.animationTimeLine.kill();
            },
            async handleStartVideo(autoStart) {
                this.playerVideo.on('ended', () => {
                    return this.elements.audioSection.classList.add('hide');
                });

                this.elements.buttonPlayAudio.classList.remove('active');
                this.elements.buttonPlayAudio.classList.add('false');
                this.elements.buttonVolumeAudio.classList.add('active');
                this.elements.buttonVolumeAudio.classList.remove('false');

                this.playerVideo.volume(1);

                if (!autoStart) {
                    setTimeout(() => {
                        this.handlePlayVideo();
                    }, 1500);
                    return;
                }

                const modalWarning = document.querySelector('.modal-warning');
                const btnPlay = document.querySelector('.modal-warning .btn-play');

                btnPlay.onclick = () => {
                    modalWarning.classList.add('hide');
                    //this.elements.audioLoop.loop = true;
                    //this.elements.audioLoop.volume = 0.1;
                    //this.elements.audioLoop.play();
                    this.handlePlayVideo();
                }
            },

            /*window.addEventListener("DOMContentLoaded", function () {
                noSleep.enable();
            });*/

            activeFormThird() {
                /*const xhr = new XMLHttpRequest();
                let formattedDate = new Date(dateValue).toLocaleDateString('en-GB', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit'
                }).replace(/\//g, "-");
                const formData = [
                    ["first-name", firstNameValue],
                    ["email", emailValue],
                    ["gender", genderValue],
                    ["sign", signValue],
                    ["moon-sign", moonSign],
                    ["civil-status", civilStatusValue],
                    ["moon-phases", moonPhases],
                    ["birth-date", formattedDate]
                ];
                let queryString = "";
                formData.forEach((pair, index) => {
                    queryString += pair.join("=") + (index == 0 ? "&" : "");
                });
                fetch("/submit?" + queryString, {
                    method: "POST",
                    headers: {
                        "Content-type": "application/json"
                    }
                });*/
            },

            activeFormFourth() {
                /*const xhr = new XMLHttpRequest();
                const formData = {
                    email: emailValue
                };
                fetch("/submit?" + new URLSearchParams(formData), {
                    method: "POST",
                    headers: {
                        "Content-type": "application/json"
                    }
                });*/
            },
            cardText(content, imgPath = pathCard) {
                const div = document.createElement('div');
                div.classList.add('frame');
                div.style =
                    "opacity: 0; aspect-ratio: 3/4; display: flex; align-items: center; justify-content: center; position: absolute; filter: drop-shadow(0px 1px 3px #9a9a9a);";

                if (window.innerWidth <= 1400 && window.innerWidth > 768) {
                    div.style.width = "130px";
                } else if (window.innerWidth <= 768) {
                    div.style.width = "150px";
                } else {
                    div.style.width = "100%";
                }

                const img = new Image();
                img.style = "aspect-ratio: 3/4; width: 100%; position: absolute; z-index: -1;";
                img.src = imgPath;

                const span =
                    `<span style='position: absolute; font-size: 1rem; text-transform: uppercase; width: 100%; left: 0; height: 100%; top: 0; display: flex; align-items: center; justify-content: center; text-shadow: 2px 0px 5px black;'>${content}</span>`;

                div.appendChild(img);
                div.innerHTML += span;

                return div;
            },

            framePhrase(primaryText, secondaryText) {
                const frame = document.createElement('div');
                frame.classList.add('frame');

                if (window.innerWidth <= 768) {
                    frame.style += "aspect-ratio: 3/4;";
                } else {
                    frame.style += "width: 100%; position: absolute; z-index: -1;";
                }

                let content = `<span>${primaryText}</span>`;
                if (secondaryText) {
                    content += `<span>${secondaryText}</span>`;
                }

                frame.innerHTML = content;
                return frame;
            },

            newCard(content) {
                const img = new Image();
                img.src = pathCard;
                img.style = "aspect-ratio: 3/4; width: 100%; position: absolute; z-index: -1;";

                const div = document.createElement('div');
                div.classList.add('frame', 'card');
                div.style =
                    "opacity: 0; aspect-ratio: 3/4; display: flex; align-items: center; justify-content: center; position: absolute; filter: drop-shadow(0px 1px 3px #9a9a9a);";

                if (window.innerWidth <= 1400 && window.innerWidth > 768) {
                    div.style.width = "130px";
                } else if (window.innerWidth <= 768) {
                    div.style.width = "150px";
                } else {
                    div.style.width = "100%";
                }

                div.appendChild(img);

                if (content.length === 2) {
                    const texts = content.split(' ');
                    div.innerHTML += `<div><span>${texts[0]}</span><span>${texts[1]}</span></div>`;
                } else if (content.length === 4) {
                    const texts = content.split(' ');
                    div.style.aspectRatio = "4/3";
                    div.innerHTML +=
                        `<div><span>${texts[0]}</span><span>${texts[1]}</span><span>${texts[2]}</span><span>${texts[3]}</span></div>`;
                } else {
                    div.innerHTML += `<div><span>${content}</span></div>`;
                }

                return div;
            },

            newElementText(content) {
                const div = document.createElement('p');
                div.classList.add('frame');
                div.style += 'transition: 1s; opacity: 0; position: absolute; margin: 0; max-width: 100%; width: 100%;';
                const span = ('<span>' + content + '</span>');
                div.innerHTML = span;
                return div
            },

            newElementTitle(content) {
                const div = document.createElement('p');
                div.classList.add('frame');
                div.style +=
                    'transition: 1s; color: #fff; width: fit-content; opacity: 0; position: absolute; margin: 0; width: fit-content; position: absolute;';
                if (window.innerWidth <= 500) {
                    div.style.fontSize = '1.25rem'
                };
                const span = ('<span>' + content + '</span>');
                div.innerHTML = span;
                return div
            },

            listGenerator(items = []) {
                const ul = document.createElement('ul');
                ul.classList.add('frame');
                ul.classList.add('list');
                ul.style +=
                    'margin: 0px; list-style: none; height: 0; width: 100%; padding: 0px; max-width: 100%; display: flex; flex-direction: column; justify-content: flex-start;';
                const item = items.map((item) => {
                    const li = ("<li style='margin-bottom: 10px;display: inline-block;'>" + item + "</li>");
                    ul.innerHTML += li
                });
                return ul
            },

            newImage(src, alt, title) {
                const img = new Image();
                img.src = src;
                img.classList.add('frame');
                img.classList.add('image');
                img.style = 'position: absolute;max-width: 100%;opacity: 0;';
                img.style.width = ("" + (alt ? alt : 'auto') + "");
                img.style.height = ("" + (title ? title : 'auto') + "");
                return img
            },

            animationFrame(element, animation) {
                animation = animation;
                animation.pause();

                if (element.type !== "list_text" && element.type !== "form" && element.type !== "data_layer") {
                    const newElement = this.createElement(element.content, element.type, element.style);
                    if (element.style) {
                        for (const styleKey in element.style) {
                            newElement.style[styleKey] = element.style[styleKey]
                        }
                    };

                    if (element.type === "image") {
                        newElement.addEventListener("load", () => {
                            element.efects.forEach((item, index) => {
                                this.animationConstructor(item, newElement, animation, element, index,
                                    element.moving, element.dataLayer, element.glowUp)
                            })
                        })
                    };

                    
                    this.handleAddChild(newElement, element.display);

                    element.efects.forEach((item, index) => {
                        this.animationConstructor(item, newElement, animation, index, element.moving, element
                            .dataLayer, element.glowUp)
                    })
                    
                } else {
                    if (element.type === "form") {
                        this.handleDisplayForm(element.content, element.time, animation)
                    } else {
                        if (element.type === "data_layer") {
                            const formElement = document.createElement("span");
                            this.elements.modalElement.appendChild(formElement);
                            animation.to(formElement, {
                                onComplete: () => {
                                    dataLayer.push(element.dataLayer)
                                }
                            }, element.time)
                        } else {
                            const itemNames = element.itens.map((item) => {
                                return item.nameItem;
                            });
                            
                            const createdElement = this.createElement(itemNames, element.type);
                            if (element.style) {
                                for (const styleKey in element.style) {
                                    createdElement.style[styleKey] = element.style[styleKey]
                                }
                            };
                            this.elements.modalElement.appendChild(createdElement);
                            const childNodes = createdElement.childNodes;
                            element.itens.forEach((element, index) => {
                                element.efects.forEach((item) => {
                                    this.animationConstructor(item, childNodes[index], animation, index,
                                        element.moving, element.dataLayer, element.glowUp)
                                })
                            })
                        }
                    }
                }
            },

            handleAddChild(createdElement, position) {
                if (position) {
                    if (position === "mobile" && window.innerWidth <= 500) {
                        this.elements.modalElement.appendChild(createdElement);
                    } else if (position === "desktop" && window.innerWidth > 500) {
                        this.elements.modalElement.appendChild(createdElement);
                    } else if (position === "tablet" && window.innerWidth > 768 && window.innerWidth < 1200) {
                        this.elements.modalElement.appendChild(createdElement);
                    }
                } else {
                    this.elements.modalElement.appendChild(createdElement);
                }
            },

            createElement(content, type) {
                switch (type) {
                    case "text":
                        return this.newElementText(this.replaceContent(content));
                    case "phrase":
                        return this.framePhrase(this.replaceContent(content[0]), this.replaceContent(content[1]));
                    case "list_text":
                        return this.listGenerator(this.replaceContent(content));
                    case "title":
                        return this.newElementTitle(this.replaceContent(content));
                    case "card":
                        return this.newCard(this.replaceContent(content));
                    case "cardText":
                        return this.cardText(this.replaceContent(content));
                    case "image":
                        return this.newImage(this.replaceContent(content));
                    case "codeExtend":
                        if(content == "destinyCalcAnimation"){
                            return this.newDestinyAnimation(this.replaceContent(content));
                        }
                        if(content == "firstnameAnimation"){
                            return this.newFirstNameAnimation(this.replaceContent(content));
                        }
                        if(content == "expressionCalcAnimation"){
                            return this.expressionCalcAnimation(this.replaceContent(content));
                        }
                    default:
                        break;
                }
            },
            expressionCalcAnimation(firstName) {
                // Cria o div principal com a classe 'frame' e estilos iniciais
                const div = document.createElement('div');
                div.classList = 'frame miniCard';
                div.style.cssText = `width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; flex-wrap: wrap; font-weight: 500; position: absolute; opacity: 1; transform: translate(0px, 159px);`;

                // Cria um container para as letras com flexbox
                const textContainer = document.createElement('div');
                textContainer.style.cssText = `display: flex; gap: 10px; width: 100%; flex-wrap: wrap; justify-content: center;`;

                // Mapeamento de letras para números de acordo com a numerologia pitagórica
                const lettersToNumbers = {
                    'A': 1, 'B': 2, 'C': 3, 'D': 4, 'E': 5, 'F': 6, 'G': 7, 'H': 8, 'I': 9,
                    'J': 1, 'K': 2, 'L': 3, 'M': 4, 'N': 5, 'O': 6, 'P': 7, 'Q': 8, 'R': 9,
                    'S': 1, 'T': 2, 'U': 3, 'V': 4, 'W': 5, 'X': 6, 'Y': 7, 'Z': 8
                };

                // Loop através de cada caractere no conteúdo para criar spans individuais
                Array.from(this.completeName.toUpperCase()).forEach(char => {
                    const letterSpan = document.createElement('span');
                    letterSpan.style.cssText = `background: rgb(126 19 169); color: #fff; width: 35px; height: 45px; font-size: 1.25rem; border-radius: 5px; box-shadow: rgb(27, 26, 26) 0px 1px 6px; display: flex; align-items: center; justify-content: center; line-height: 0; margin-top: 60px;`;
                    letterSpan.textContent = char;

                    const numberSpan = document.createElement('span');
                    numberSpan.style.cssText = `background: rgb(247 193 9); color: #fff; width: 35px; height: 45px; font-size: 1.25rem; border-radius: 5px; box-shadow: rgb(27, 26, 26) 0px 1px 6px; display: flex; align-items: center; justify-content: center; line-height: 0; position: absolute; top: 120px;`;
                    numberSpan.textContent = lettersToNumbers[char] || '';

                    const container = document.createElement('div');
                    container.style.cssText = `opacity: 1; transform: translate(0px, 0px); position: relative;`;

                    container.appendChild(letterSpan);
                    container.appendChild(numberSpan);

                    // Adiciona o container ao textContainer
                    textContainer.appendChild(container);
                });

                // Adiciona o container de texto ao div principal
                div.appendChild(textContainer);

                // Retorna o elemento div configurado
                return div;
            },
            newFirstNameAnimation(content){
                // Cria o div principal com a classe 'frame' e estilos iniciais
                const div = document.createElement('div');
                div.classList = 'frame';
                div.style.cssText = `position: absolute; opacity: 0; transition: 1s; display: flex; justify-content: center; align-items: center; width: 100%;`;

                // Cria um container para as letras com flexbox
                const textContainer = document.createElement('div');
                textContainer.style.cssText = `display: flex; gap: 10px; width: 100%; flex-wrap: wrap; justify-content: center;`;

                // Loop através de cada caractere no conteúdo para criar spans individuais
                Array.from(this.firstName).forEach(char => {
                    const span = document.createElement('span');
                    span.className = 'card-animation card-animation-name';
                    span.textContent = char;

                    // Estilos específicos poderiam ser aplicados aqui baseados no caractere
                    // Aqui estou aplicando opacidade e transformação para ilustrar
                    let opacity = 1;
                    let scale = 1;
    
                    span.style.cssText = `font-size: 20px; opacity: ${opacity}; transform: translate3d(0px, 0px, 0px) scale(${scale}, ${scale});`;

                    // Adiciona o span ao container de texto
                    textContainer.appendChild(span);
                });

                // Adiciona o container de texto ao div principal
                div.appendChild(textContainer);

                // Retorna o elemento div configurado
                return div;
            },
            newDestinyAnimation(content) {
                const container = document.createElement('div');
                container.classList = 'frame';
                container.style = 'opacity: 0; transition: 1s; position: absolute;';
                
                const innerContainer = document.createElement('div');
                innerContainer.style = 'justify-content: center; align-items: center; display: flex; flex-direction: column;';

                const contentContainer = document.createElement('div');
                contentContainer.style = 'display: flex; flex-direction: column; gap: 15px;';

                // Array to hold the different rows and their contents
                const rowsData = [
                    {
                        items: [
                            { class: 'card-animation', content: '<span style="color: white; transition: 1s;">' + this.animationDayName + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'filter: invert(1);' },
                            { class: 'card-animation', content: '<span style="opacity: 0.8704; color: white; transition: 1s;">' + this.animationDaySum + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'opacity: 1; filter: invert(1);' },
                            { class: 'card-animation', content: this.animationDayNumerology, style: 'opacity: 1; transition: 1s;' }
                        ]
                    },
                    {
                        items: [
                            { class: 'card-animation', content: '<span style="color: white; transition: 1s;">' + this.animationMonthName + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'filter: invert(1);'  },
                            { class: 'card-animation', content: '<span style="opacity: 0.8704; transition: 1s;">' + this.animationMonthSum + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'opacity: 1; filter: invert(1);' },
                            { class: 'card-animation', content: this.animationMonthNumerology, style: 'opacity: 1; transition: 1s;' }
                        ]
                    },
                    {
                        items: [
                            { class: 'card-animation', content: '<span style="color: white; transition: 1s;">' + this.animationYearName + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'filter: invert(1);'  },
                            { class: 'card-animation', content: '<span style="opacity: 0.8704; color: white; transition: 1s;">' + this.animationYearSum + '</span>' },
                            { class: 'icon-animation fas fa-arrow-right', content: '', style: 'opacity: 1; filter: invert(1);' },
                            { class: 'card-animation', content: this.animationYearNumerology, style: 'opacity: 1; transition: 1s; color: white;' }
                        ]
                    }
                ];

                rowsData.forEach(rowData => {
                    const row = document.createElement('div');
                    row.className = 'row-animation';
                    row.style = 'position: relative;';

                    rowData.items.forEach(item => {
                        const element = document.createElement(item.class.includes('icon-animation') ? 'i' : 'div');
                        element.className = item.class;
                        element.innerHTML = item.content;
                        if (item.style) {
                            element.style = item.style;
                        }
                        row.appendChild(element);
                    });

                    contentContainer.appendChild(row);
                });

                // Adicionar novo bloco de conteúdo
                const additionalContent = document.createElement('div');
                additionalContent.style = 'display: flex; margin-top: 20px';
                additionalContent.innerHTML = `
                    <div class="row-animation" style="position: relative;">
                        <div class="card-animation" style="font-size: 2.5rem;  display: flex; flex-direction: row; margin-left: 20px; opacity: 1;">
                            <span style="opacity: 1;">${this.animationDayNumerology} + ${this.animationMonthNumerology} + ${this.animationYearNumerology}</span>
                        </div>
                        <i class="icon-animation fas fa-arrow-right" aria-hidden="true" style="filter: invert(1);"></i>
                        <div class="card-animation" style="font-size: 2.5rem;opacity: 1;"><span style="opacity: 1;">${this.numeroDestinoFormatado}</span></div>
                        <i class="icon-animation fas fa-arrow-right" aria-hidden="true" style="filter: invert(1);"></i>
                        <div class="card-animation" style="font-size: 3rem; opacity: 1;">${this.numeroDestinoOficial}</div>
                    </div>
                `;

                innerContainer.appendChild(contentContainer);
                innerContainer.appendChild(additionalContent);
                container.appendChild(innerContainer);
                return container;
            },

            handleDisplayForm(formName, sections, animation) {
                var _this = this;
                this.formsSectionsArray.forEach((section) => {
                    if (formName === section.name) {
                        if (section.name === '[cta]') {
                            animation.to(section.section, {
                                onComplete: () => _this.handleCta(section.name)
                            }, sections);
                            return
                        };
                        animation.to(section.section, {
                            onComplete: () => _this.formIsTrue(section.name)
                        }, sections);
                    }
                })
            },

            animationConstructor(element, target, animation, index, callback, data, modal) {
                let startPosition, endPosition, animationStart, animationEnd;
                let elementAnimation = element.from_animation;
                let elementOptions = element.to_animation;
                if (modal) {
                    target.classList.add('glowUp')
                };
                if (window.innerWidth <= 768) {
                    animationStart = 10
                } else {
                    animationStart = 30
                };
                const positions = [{
                    name: 'top_center',
                    values: {
                        x: this.modelVW / 2 - target.clientWidth / 2,
                        y: animationStart
                    }
                }, {
                    name: 'top_left',
                    values: {
                        x: animationStart,
                        y: animationStart
                    }
                }, {
                    name: 'top_left_center',
                    values: {
                        x: this.modelVW / 3 - target.clientWidth / 3,
                        y: animationStart
                    }
                }, {
                    name: 'top_right',
                    values: {
                        x: this.modelVW - target.clientWidth - animationStart,
                        y: animationStart
                    }
                }, {
                    name: 'top_right_center',
                    values: {
                        x: this.modelVW / 1.5 - target.clientWidth / 1.5 + 10,
                        y: animationStart
                    }
                }, {
                    name: 'center',
                    values: {
                        x: this.modelVW / 2 - target.clientWidth / 2,
                        y: this.modelVH / 2 - target.clientHeight / 2
                    }
                }, {
                    name: 'center_left',
                    values: {
                        x: animationStart,
                        y: this.modelVH / 2 - target.clientHeight / 2
                    }
                }, {
                    name: 'center_left_center',
                    values: {
                        x: this.modelVW / 3 - target.clientWidth / 3,
                        y: this.modelVH / 2 - target.clientHeight / 2
                    }
                }, {
                    name: 'center_right',
                    values: {
                        x: this.modelVW - target.clientWidth - animationStart,
                        y: this.modelVH / 2 - target.clientHeight / 2
                    }
                }, {
                    name: 'center_right_center',
                    values: {
                        x: this.modelVW / 1.5 - target.clientWidth / 1.5 + 10,
                        y: this.modelVH / 2 - target.clientHeight / 2
                    }
                }, {
                    name: 'bottom_center',
                    values: {
                        x: this.modelVW / 2 - target.clientWidth / 2,
                        y: this.modelVH - target.clientHeight - animationStart
                    }
                }, {
                    name: 'bottom_left',
                    values: {
                        x: this.modelVW - target.clientWidth - animationStart,
                        y: this.modelVH - target.clientHeight - animationStart
                    }
                }, {
                    name: 'bottom_left_center',
                    values: {
                        x: this.modelVW / 1.5 - target.clientWidth / 1.5 + 10,
                        y: this.modelVH - target.clientHeight - animationStart
                    }
                }, {
                    name: 'bottom_right',
                    values: {
                        x: animationStart,
                        y: this.modelVH - target.clientHeight - animationStart
                    }
                }, {
                    name: 'bottom_right_center',
                    values: {
                        x: this.modelVW / 3 - target.clientWidth / 3,
                        y: this.modelVH - target.clientHeight - animationStart
                    }
                }, {
                    name: 'center_center_top',
                    values: {
                        x: this.modelVW / 2 - target.clientWidth / 2,
                        y: this.modelVH / 3 - target.clientHeight / 3
                    }
                }, {
                    name: 'center_center_top_left',
                    values: {
                        x: animationStart,
                        y: this.modelVH / 3 - target.clientHeight / 3
                    }
                }, {
                    name: 'center_center_top_right',
                    values: {
                        x: this.modelVW - target.clientWidth - animationStart,
                        y: this.modelVH / 3 - target.clientHeight / 3
                    }
                }, {
                    name: 'center_center_bottom',
                    values: {
                        x: this.modelVW / 2 - target.clientWidth / 2,
                        y: this.modelVH / 1.3 - target.clientHeight / 1.3
                    }
                }, {
                    name: 'center_center_bottom_left',
                    values: {
                        x: animationStart,
                        y: this.modelVH / 1.3 - target.clientHeight / 1.3
                    }
                }, {
                    name: 'center_center_bottom_right',
                    values: {
                        x: this.modelVW - target.clientWidth - animationStart,
                        y: this.modelVH / 1.3 - target.clientHeight / 1.3
                    }
                }];
                if (element.position_from) {
                    const start = positions.filter((pos) => {
                        if (pos.name === element.position_from) {
                            return pos
                        }
                    });
                    startPosition = start[0].values;
                    elementAnimation = {
                        ...elementAnimation,
                        ...startPosition,
                        ...animationEnd
                    }
                };
                if (element.position_to) {
                    const start = positions.filter((pos) => {
                        if (pos.name === element.position_to) {
                            return pos
                        }
                    });
                    endPosition = start[0].values;
                    elementOptions = {
                        ...elementOptions,
                        ...endPosition
                    }
                };
                if (element.type_animation === 'fromTo') {
                    if (data || callback && index === 0) {
                        animation.fromTo(target, element.duration, elementAnimation, {
                            ...elementOptions,
                            onComplete: callback && data ? () => {

                                const loop = new TimelineMax({
                                    repeat: -1
                                });
                                loop.to(target, 1, {
                                    scale: 1.050
                                });
                                loop.to(target, 1, {
                                    scale: 1
                                });
                                dataLayer.push(data);
                            } : callback ? this.handleMoving : () => {
                                dataLayer.push(data)
                            }
                        }, element.time)
                    } else {
                        animation.fromTo(target, element.duration, elementAnimation, elementOptions, element.time)
                    }
                } else {
                    if (element.type_animation === 'to') {
                        animation.to(target, element.duration, elementOptions, element.time)
                    } else {
                        animation.from(target, element.duration, elementAnimation, element.time)
                    }
                }
            },

            handleMoving() {
                const loop = new TimelineMax({
                    repeat: -1
                });
                this._targets = document.querySelectorAll('img.frame.image');

                this._targets.forEach(target => {
                    const loop = new TimelineMax({
                        repeat: -1,
                        yoyo: true
                    });
                    loop.to(target, 1, {
                        scale: 1.050,
                        ease: Power1.easeInOut
                    });
                });
            },

            /*handleGlowUP(target) {
                const loop = new TimelineMax({
                    repeat: -1
                });
                loop.to(target, 1, {
                    css: {
                        filter: "drop-shadow(0 0 0.375rem rgb(255, 255, 255, 0.3))"
                    }
                });
                loop.to(target, 1, {
                    css: {
                        filter: "drop-shadow(0 0 0 rgb(255, 255, 255, 0.3))"
                    }
                });
            },

            miniCards(cardTitles, cardContents, useIcons) {
                const container = document.createElement('div');
                const containerStyle = window.innerWidth <= 500 ? "minicard_small" : "minicard_large";
                container.style =
                    `position: relative; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; width: 100%; gap: 10px;`;

                const iconClasses = ["icon1", "icon2", "icon3", "icon4", "icon5"];
                const iconTemplate = window.innerWidth <= 500 ? "small_icon" : "large_icon";
                const cardTemplate = window.innerWidth <= 500 ? "card_template_small" : "card_template_large";

                cardTitles.forEach((title, index) => {
                    if (useIcons) {
                        if (title !== "special") {
                            const sanitizedTitle = title.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
                                .toLowerCase();
                            if (iconClasses.includes(sanitizedTitle)) {
                                const icon = `<div class="${iconTemplate}"><span>${title}</span></div>`;
                                const content =
                                    `<div class="${cardTemplate}"><span>${cardContents[index]}</span></div>`;
                                const card = document.createElement('div');
                                card.innerHTML += icon;
                                card.innerHTML += content;
                                container.appendChild(card);
                            } else {
                                const defaultCard = `<div class="${cardTemplate}"><span>${title}</span></div>`;
                                container.innerHTML += defaultCard;
                            }
                        } else {
                            if (window.innerWidth <= 500) {
                                const specialIcon = "<div class='special_small'></div>";
                                container.innerHTML += specialIcon;
                            } else {
                                const specialIcon = "<div class='special_large'></div>";
                                container.innerHTML += specialIcon;
                            }
                        }
                    } else {
                        if (title !== "special") {
                            const titleCard = `<div class="${cardTemplate}"><span>${title}</span></div>`;
                            const contentCard =
                                `<div class="${cardTemplate}"><span>${cardContents[index]}</span></div>`;
                            const card = document.createElement('div');
                            card.innerHTML += titleCard;
                            card.innerHTML += contentCard;
                            container.appendChild(card);
                        } else {
                            if (window.innerWidth <= 500) {
                                const specialIcon = "<div class='special_small'></div>";
                                container.innerHTML += specialIcon;
                            } else {
                                const specialIcon = "<div class='special_large'></div>";
                                container.innerHTML += specialIcon;
                            }
                        }
                    }
                });

                return container;
            },*/

            normalize(v) {
                v = v - Math.floor(v);
                if (v < 0) {
                    v = v + 1;
                }
                return v;
            },


            getMoonInformations(date) {
                var age, // Moon's age
                    distance, // Moon's distance in earth radii
                    latitude, // Moon's ecliptic latitude
                    longitude, // Moon's ecliptic longitude
                    phase, // Moon's phase
                    trajectory, // Moon's trajectory
                    zodiac; // Moon's zodiac sign 

                var yy, mm, k1, k2, k3, jd;
                var ip, dp, np, rp;

                var year = date.getFullYear();
                var month = date.getMonth() + 1;
                var day = date.getDate();


                yy = year - Math.floor((12 - month) / 10);
                mm = month + 9;
                if (mm >= 12) {
                    mm = mm - 12;
                }

                k1 = Math.floor(365.25 * (yy + 4712));
                k2 = Math.floor(30.6 * mm + 0.5);
                k3 = Math.floor(Math.floor((yy / 100) + 49) * 0.75) - 38;

                jd = k1 + k2 + day + 59; // for dates in Julian calendar
                if (jd > 2299160) {
                    jd = jd - k3; // for Gregorian calendar
                }

                //calculate moon's age in days
                ip = this.normalize((jd - 2451550.1) / 29.530588853);
                age = ip * 29.53;

                if (age < 1.84566) {
                    phase = 'NEW';
                    trajectory = 'ascendent';
                } else if (age < 5.53699) {
                    phase = 'Waxing crescent';
                    trajectory = 'ascendent';
                } else if (age < 9.22831) {
                    phase = 'First quarter';
                    trajectory = 'ascendent';
                } else if (age < 12.91963) {
                    phase = 'Waxing gibbous';
                    trajectory = 'ascendent';
                } else if (age < 16.61096) {
                    phase = 'FULL';
                    trajectory = 'descendent';
                } else if (age < 20.30228) {
                    phase = 'Waning gibbous';
                    trajectory = 'descendent';
                } else if (age < 23.99361) {
                    phase = 'Last quarter';
                    trajectory = 'descendent';
                } else if (age < 27.68493) {
                    phase = 'Waning crescent';
                    trajectory = 'descendent';
                } else {
                    phase = 'NEW';
                    trajectory = 'ascendent';
                }

                ip = ip * 2 * Math.PI; //Convert phase to radians

                // Calculate moon's distance
                dp = 2 * Math.PI * this.normalize((jd - 2451562.2) / 27.55454988);
                distance = 60.4 - 3.3 * Math.cos(dp) - 0.6 * Math.cos(2 * ip - dp) - 0.5 * Math.cos(2 * ip);

                // Calculate moon's ecliptic latitude
                np = 2 * Math.PI * this.normalize((jd - 2451565.2) / 27.212220817);
                latitude = 5.1 * Math.sin(np);

                // Calculate moon's ecliptic longitude
                rp = this.normalize((jd - 2451555.8) / 27.321582241);
                longitude = 360 * rp + 6.3 * Math.sin(dp) + 1.3 * Math.sin(2 * ip - dp) + 0.7 * Math.sin(2 * ip);

                if (longitude < 33.18) {
                    zodiac = 'Pisces';
                } else if (longitude < 51.16) {
                    zodiac = 'Aries';
                } else if (longitude < 93.44) {
                    zodiac = 'Taurus';
                } else if (longitude < 119.48) {
                    zodiac = 'Gemini';
                } else if (longitude < 135.30) {
                    zodiac = 'Cancer';
                } else if (longitude < 173.34) {
                    zodiac = 'Leo';
                } else if (longitude < 224.17) {
                    zodiac = 'Virgo';
                } else if (longitude < 242.57) {
                    zodiac = 'Libra';
                } else if (longitude < 271.26) {
                    zodiac = 'Scorpio';
                } else if (longitude < 302.49) {
                    zodiac = 'Sagittarius';
                } else if (longitude < 311.72) {
                    zodiac = 'Capricorn';
                } else if (longitude < 348.58) {
                    zodiac = 'Aquarius';
                } else {
                    zodiac = 'Pisces';
                }

                return {
                    'date': {
                        'year': year,
                        'month': month,
                        'day': day
                    },
                    'age': age,
                    'distance': distance * 6371,
                    'ecliptic': {
                        'latitude': latitude,
                        'longitude': longitude
                    },
                    'phase': phase,
                    'trajectory': trajectory,
                    'constellation': zodiac,
                };
            },
            datasForDay(day) {
                return this.getMoonInformations(day);
            },
            fetchMoonData() {
                this.moonData = this.datasForDay(new Date());
            },
            async generatorAnimation(animationData) {
                this.animationTimeLine = gsap.timeline().pause();
                this.animationTimeLine.pause;

                this.modelVH = this.elements.modalElement.clientHeight;
                this.modelVW = this.elements.modalElement.clientWidth;

                animationData.forEach((animationFrameData) => {
                    this.animationFrame(animationFrameData, this.animationTimeLine);
                });
            },
            handleVideo(videoSrc, textTrackSrc, modalElement, replaceContent) {
                modalElement.load();
                var isTextTrackAdded = false;
                let videoConfig = {
                    controls: false,
                    autoplay: false,
                    fluid: true,
                    preload: "auto",
                    sources: [{
                        src: videoSrc,
                        type: "audio/mp3"
                    }]
                };

                if (!this.playerVideo) {
                    this.playerVideo = videojs("my-player", videoConfig);
                }

                this.playerVideo.src({
                    type: "audio/mp3",
                    src: videoSrc
                });

                this.playerVideo.ready(() => {
                    var textTracks = this.playerVideo.remoteTextTracks();
                    var numTextTracks = textTracks.length;
                    while (numTextTracks--) {
                        this.playerVideo.removeRemoteTextTrack(textTracks[numTextTracks]);
                    }
                    this.playerVideo.addRemoteTextTrack({
                        kind: "captions",
                        src: textTrackSrc,
                        mode: "showing"
                    }, false);
                });

                var _this = this;

                this.playerVideo.on("play", () => {
                    if (!isTextTrackAdded) {
                        var textTracks = this.playerVideo.textTracks();

                        var track = textTracks[
                        0]; // Assumindo que textTracks é acessível e possui pelo menos um track

                        // Adiciona um ouvinte de evento ao track, não ao cue individual
                        track.addEventListener("cuechange", function () {
                            // Este evento é acionado quando a lista de cues ativos é atualizada
                            var activeCues = track.activeCues; // Obtém os cues ativos atualmente
                            if (activeCues.length > 0) {
                                for (var i = 0; i < activeCues.length; i++) {
                                    // Modifica o texto do cue conforme necessário
                                    activeCues[i].text = _this.replaceContent(activeCues[i].text, true);
                                }
                            }
                        });

                        isTextTrackAdded = true;
                    }
                });

                this.playerVideo.pause();
            },

            async getJsonData(url) {
                let jsonData;
                await fetch(`/${url}/`, {
                        method: "GET",
                        headers: {
                            'Accept': "application/json"
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        jsonData = data;
                    });
                return jsonData;
            },

            handleFormsSections(sections) {
                this.formsSectionsArray = sections;
            },

            clickButtonGender(gender) {
                this.userSex = gender;
                this.genderValue = gender;
                this.trackQuizStep(1, 'gender_selected');
                // Avança para o próximo step após selecionar gênero
                setTimeout(() => {
                    this.currentStep = 2;
                }, 500);
            },
            selectStatusCivil(civilSatus) {
                console.log(civilSatus);
                this.userCivilStatus = civilSatus;
                this.civilStatusValue = civilSatus;
                console.log(this.userCivilStatus);
                this.trackQuizStep(6, 'progress');
                this.currentStep = 7;
                /*this.showCivilStatusPopup = false;
                this.showEmailPopup = true;*/
            },
            selectDesafio(desafio){
                this.desafioValue = desafio;
                this.trackQuizStep(7, 'progress');
                this.currentStep = 8;
            },
            trackQuizStep(step, status = 'progress') {
                if (typeof gtag === 'function') {
                    gtag('event', 'quiz_progress', {
                    quiz_id: this.quizId,
                    step: step,
                    status: status
                    })
                    console.log(`[GA4] quiz_id=${this.quizId} step=${step} status=${status}`)
                }
                if (this.$posthog) {
                    this.$posthog.capture('quiz_progress', {
                        quiz_id: this.quizId,
                        step: step,
                        status: status,
                        funnel_name: this.funnelName,
                        utm_prefix: this.utmPrefix
                    });
                }
            },
        },
        computed: {
            progressPercentage() {
                const totalSteps = 8; // Número total de etapas
                const progress = (this.currentStep / totalSteps) * 100;
                return Math.min(progress, 100); // Garante que não passe de 100%
            },
            showProgressBar() {
                return this.section1 && this.currentStep <= 8; // Mostra apenas durante section1 e até a etapa 6
            }
        }
    }
</script>