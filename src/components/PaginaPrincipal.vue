<style>
  .fundo-mahila{
    background-image: url('../assets/5935675.jpg');
    background-position: center; /* Centraliza a imagem */
    height: 100vh; /* Ajusta a altura do container */
    width: 100%;
    font-family: 'Sora', Tahoma, Geneva, Verdana, sans-serif;
  }

  .popup-mahila{
    background-color: white;
    padding: 40px;
    margin-top: 30px;
    border-radius: 13px;
  }

  .btn-enviar{
    width: 100%;
    font-family: 'Sora', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #28a745;
    color: white;
    font-weight: bold;
    font-size: 18px;
    padding: 15px 20px;
    border: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3);
  }

  .btn-enviar:hover {
    background-color: #218838;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(40, 167, 69, 0.4);
  }

  .btn-enviar:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(40, 167, 69, 0.3);
  }
</style>

<template>
  <div class="container-fluid fundo-mahila">
    <div class="row" v-if="this.parte1 == true" v-show="this.parte2 == false">
      <div class="col-4"></div>
      <div class="col-sm-12 popup-mahila">
        <p style="font-size: 20px; color: #060606">Por favor, insira abaixo o e-mail EXATAMENTE igual ao e-mail utilizado no momento da sua compra.</p>
        <hr>
        <form @submit.prevent="checkIfUserInList" class="space-y-4">
          <div>
            <label for="email" style="color: #060606" class="block font-medium">E-mail:</label>
            <input v-model="email" class="form-control"/>
          </div>
          <button style="margin-top: 10px" type="submit" class="btn-submit btn-enviar">Enviar</button>
        </form>
        <hr>
        <h3 style="text-align: center; color: red; font-weight: bold">Precisa de suporte?</h3>
        <p style="color: #060606">
          Não se preocupe, envie um e-mail com o seu Nome Completo e o e-mail utilizado na compra, explicando o que está a acontecer para podermos ajudar.
          <br><br>
          O e-mail do meu suporte é: suporte@codigosdaalma.online (note que o nosso e-mail não tem o ".br" no final)
        </p>
      </div>
    </div>

    <div class="row" v-show="this.parte2 == true">
      <div class="col-4"></div>
      <div class="col-sm-12 popup-mahila">
        <p style="font-size: 20px; color: #060606">Preencha o formulário abaixo e clique em Enviar para aceder ao seu Mapa Numerológico.</p>
        <hr>
        <form @submit.prevent="handleSubmit" class="space-y-4">
          <div>
            <label for="name" class="block font-medium" style="color: #060606">Nome Completo:</label>
            <input v-model="name" type="text" id="name" class="form-control">
          </div>
          <br>

          <div>
            <label for="birthdate" class="block font-medium" style="color: #060606">Insira a sua Data de Nascimento:</label>
            <div class="date-inputs">
              <input v-model="day" type="number" class="form-control" placeholder="Dia" min="1" max="31">
              <select class="form-control" v-model="month" placeholder="Mês">
                <option disabled value="" selected>Mês</option>
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
              </select>
              <input v-model="year" type="number" class="form-control" placeholder="Ano" min="1900" max="2100">
            </div>
            <input v-model="birthdate" type="date" id="birthdate" class="form-control" style="display: none;">
          </div>
          <button style="margin-top: 10px" type="submit" class="btn-submit btn-enviar">Enviar</button>
        </form>
        <div v-if="error" class="text-red-600 mt-4">{{ error }}</div>
        <hr>
        <h3 style="text-align: center; color: red; font-weight: bold">Precisa de suporte?</h3>
        <p style="color: #060606">
          Não se preocupe, envie um e-mail com o seu Nome Completo e o e-mail utilizado na compra, explicando o que está a acontecer para podermos ajudar.
          <br><br>
          O e-mail do meu suporte é: suporte@codigosdaalma.online (note que o nosso e-mail não tem o ".br" no final)
        </p>
      </div>
    </div>
  </div>
</template>

<script>
//import apiService from '../services/apiService.js';
import { parseISO, getDate, getMonth, getYear } from 'date-fns';
import { Loader } from '@googlemaps/js-api-loader';
//import axios from 'axios';

export default {
  name: "PaginaPrincipal",
  components: {

  },
  data() {
    return {
      name: '',
      gender: '',
      birthdate: '',
      birthtime: '',
      day: '',
      month: '',
      year: '',
      unknownTime: false,
      autocomplete: null,
      lat: null,
      lng: null,
      timezone: null,
      place: '',
      showSigno: false,
      error: null,
      google: null,
      email: '',
      isInList: null,
      parte1: true,
      parte2: false
    };
  },
  watch: {
    // Watchers para atualizar a data conforme os valores de dia, mês e ano mudam
    day() {
      this.updateBirthdate();
    },
    month() {
      this.updateBirthdate();
    },
    year() {
      this.updateBirthdate();
    }
  },
  mounted() {
    const loader = new Loader({
      apiKey: 'AIzaSyCbJ2m7_M9GBR1f3c-0EbvMjUDt5wc6IVY',
      libraries: ['places'],
    });

    this.google = loader.load();

    this.google = window.google;
    this.initAutocomplete();
  },
  methods: {
    updateBirthdate() {
      // Certifica-se de que todos os campos estão preenchidos antes de atualizar o birthdate
      if (this.day && this.month && this.year) {
        // Formata os campos para garantir que dia e mês sempre tenham dois dígitos
        const formattedDay = String(this.day).padStart(2, '0');
        const formattedMonth = String(this.month).padStart(2, '0');
        // Atualiza o birthdate no formato yyyy-mm-dd
        this.birthdate = `${this.year}-${formattedMonth}-${formattedDay}`;
      }
    },
    async initAutocomplete() {

      const input = this.$refs.addressInput;
      this.autocomplete = new this.google.maps.places.Autocomplete(input, {
        types: ['geocode'],
      });

      this.autocomplete.addListener('place_changed', this.onPlaceChanged);
    },
    onPlaceChanged() {
      const place = this.autocomplete.getPlace();

      if (!place.geometry) {
        document.getElementById('output').innerText = 'Por favor, selecione um endereço válido.';
        return;
      }

      // Atualizar o valor do campo de entrada com o endereço completo
      this.$refs.addressInput.value = place.formatted_address;
      this.place = place.formatted_address;

      const lat = place.geometry.location.lat();
      const lng = place.geometry.location.lng();

      this.lat = lat;
      this.lng = lng;

      this.getTimeZone(lat, lng);

      
    },
    getTimeZone(lat, lng) {
      const timestamp = Math.floor(Date.now() / 1000);
      const timezoneAPI = `https://maps.googleapis.com/maps/api/timezone/json?location=${lat},${lng}&timestamp=${timestamp}&key=AIzaSyCbJ2m7_M9GBR1f3c-0EbvMjUDt5wc6IVY`;

      fetch(timezoneAPI)
        .then(response => response.json())
        .then(data => {
          if (data.status === 'OK') {
            const rawOffset = data.rawOffset; // Deslocamento UTC bruto em segundos
            const dstOffset = data.dstOffset; // Deslocamento devido ao horário de verão em segundos
            const totalOffset = (rawOffset + dstOffset) / 3600; // Converter de segundos para horas
            this.timezone = totalOffset;
          }
        })
        .catch(error => {
          console.error('Error fetching timezone:', error);
        });
    },
    async checkIfUserInList() {
      this.parte2 = true;
      this.parte1 = false;
    },
    handleSubmit() {
      this.error = null;
      if (!this.birthdate || !this.name ) {
        this.error = "Por favor, preencha todos os campos obrigatórios!";
        return;
      }


      const birthdate = parseISO(this.birthdate);

      const userData = {
        full_name: this.name,
        day: getDate(birthdate),
        month: getMonth(birthdate) + 1,
        year: getYear(birthdate),
        email: this.email
      };

      this.$router.push({
        name: 'HelloWorld',
        params: {
          full_name: this.name,
          day: userData.day,
          month: userData.month,
          year: userData.year,
          email: this.email
        }
      });

    }
  }
};
</script>