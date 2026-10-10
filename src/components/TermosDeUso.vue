<template>
  <div class="legal-page">
    <div class="legal-container">
      <div class="legal-header">
        <h1>Termos de Uso</h1>
        <p class="last-update">Última atualização: {{ currentDate }}</p>
      </div>

      <div class="legal-content">
        <section>
          <h2>1. Aceitação dos Termos</h2>
          <p>
            Ao acessar e usar este site, você aceita e concorda em estar vinculado aos termos e
            condições aqui estabelecidos. Se você não concordar com qualquer parte destes termos,
            não deve usar nosso site.
          </p>
        </section>

        <section>
          <h2>2. Uso do Serviço</h2>
          <p>
            Nosso serviço oferece leituras numerológicas e conteúdos relacionados para fins de
            entretenimento e autoconhecimento. O serviço não substitui aconselhamento profissional
            em áreas como finanças, saúde, psicologia ou questões legais.
          </p>
          <ul>
            <li>Você deve ter pelo menos 18 anos de idade para usar este serviço</li>
            <li>Você concorda em fornecer informações precisas e verdadeiras</li>
            <li>Você é responsável por manter a confidencialidade de suas informações de acesso</li>
          </ul>
        </section>

        <section>
          <h2>3. Propriedade Intelectual</h2>
          <p>
            Todo o conteúdo presente neste site, incluindo textos, gráficos, logos, imagens,
            áudios, vídeos e software, é de propriedade exclusiva ou licenciada por nós e está
            protegido pelas leis de direitos autorais brasileiras e internacionais.
          </p>
        </section>

        <section>
          <h2>4. Limitação de Responsabilidade</h2>
          <p>
            Este serviço é fornecido "como está" para fins de entretenimento. Não garantimos
            resultados específicos. As informações fornecidas não devem ser consideradas como
            conselhos profissionais em finanças, saúde, psicologia ou qualquer outra área.
          </p>
          <p>
            <strong>Aviso Importante:</strong> Os resultados podem variar de pessoa para pessoa.
            Não nos responsabilizamos por decisões tomadas com base nas informações fornecidas.
          </p>
        </section>

        <section>
          <h2>5. Modificações nos Termos</h2>
          <p>
            Reservamo-nos o direito de modificar estes termos a qualquer momento. As alterações
            entrarão em vigor imediatamente após sua publicação neste site. O uso continuado do
            site após tais modificações constitui aceitação dos novos termos.
          </p>
        </section>

        <section>
          <h2>6. Política de Reembolso</h2>
          <p>
            Por se tratar de conteúdo digital de entrega imediata, não oferecemos reembolso após
            a compra e acesso ao conteúdo. Caso tenha problemas técnicos para acessar o material
            adquirido, entre em contato conosco.
          </p>
        </section>

        <section>
          <h2>7. Contato</h2>
          <p>
            Para dúvidas sobre estes termos, entre em contato através dos canais disponíveis
            em nosso site.
          </p>
        </section>

        <section>
          <h2>8. Isenção de Responsabilidade sobre Plataformas de Terceiros</h2>
          <p>
            Este site não faz parte do Facebook, Google ou qualquer outra plataforma de terceiros.
            Além disso, NÃO somos endossados por essas plataformas de nenhuma maneira.
            FACEBOOK é uma marca registrada da Meta Platforms, Inc.
          </p>
        </section>

        <section>
          <h2>9. Lei Aplicável</h2>
          <p>
            Estes termos são regidos pelas leis do Brasil. Qualquer disputa relacionada a estes
            termos será submetida à jurisdição exclusiva dos tribunais brasileiros.
          </p>
        </section>
      </div>

      <div class="legal-footer">
        <router-link to="/" class="btn-back">← Voltar para o Início</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TermosDeUso',
  computed: {
    currentDate() {
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      return new Date().toLocaleDateString('pt-BR', options);
    }
  }
}
</script>

<style scoped>
.legal-page {
  min-height: 100vh;
  background-color: purple;
  padding: 40px 20px;
}

.legal-container {
  max-width: 900px;
  margin: 0 auto;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 15px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
}

.legal-header {
  text-align: center;
  margin-bottom: 40px;
  padding-bottom: 20px;
  border-bottom: 3px solid #ffdb60;
}

.legal-header h1 {
  font-size: 2.5rem;
  color: #1a1a2e;
  margin-bottom: 10px;
  font-weight: 700;
}

.last-update {
  color: #666;
  font-size: 0.9rem;
  font-style: italic;
}

.legal-content section {
  margin-bottom: 35px;
}

.legal-content h2 {
  font-size: 1.5rem;
  color: #1a1a2e;
  margin-bottom: 15px;
  font-weight: 600;
}

.legal-content p {
  line-height: 1.8;
  color: #333;
  margin-bottom: 15px;
  text-align: justify;
}

.legal-content ul {
  margin: 15px 0;
  padding-left: 25px;
}

.legal-content li {
  margin-bottom: 10px;
  line-height: 1.7;
  color: #333;
}

.legal-content strong {
  color: #1a1a2e;
  font-weight: 600;
}

.legal-footer {
  margin-top: 50px;
  text-align: center;
  padding-top: 30px;
  border-top: 2px solid #e0e0e0;
}

.btn-back {
  display: inline-block;
  padding: 12px 30px;
  background: #ffdb60;
  color: #1a1a2e;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(255, 219, 96, 0.3);
}

.btn-back:hover {
  background: #ffd040;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(255, 219, 96, 0.4);
}

@media (max-width: 768px) {
  .legal-container {
    padding: 25px 20px;
  }

  .legal-header h1 {
    font-size: 1.8rem;
  }

  .legal-content h2 {
    font-size: 1.3rem;
  }

  .legal-content p,
  .legal-content li {
    font-size: 0.95rem;
  }
}
</style>
