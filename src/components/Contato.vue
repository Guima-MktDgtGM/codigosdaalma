<template>
  <div class="legal-page">
    <div class="legal-container">
      <div class="legal-header">
        <h1>Contato</h1>
        <p class="subtitle">Estamos aqui para ajudar você</p>
      </div>

      <div class="legal-content">
        <section>
          <h2>Entre em Contato Conosco</h2>
          <p>
            Se você tiver dúvidas, sugestões ou precisar de suporte, ficaremos felizes
            em ajudá-lo. Utilize um dos canais abaixo:
          </p>
        </section>

        <section class="contact-methods">
          <div class="contact-card">
            <div class="contact-icon">📧</div>
            <h3>E-mail</h3>
            <p>Envie sua mensagem para:</p>
            <div class="contact-link">
              contato@seusite.com.br
            </div>
            <p class="response-time">Respondemos em até 24 horas úteis</p>
          </div>

          <div class="contact-card">
            <div class="contact-icon">💬</div>
            <h3>Suporte</h3>
            <p>Precisa de ajuda com seu pedido?</p>
            <div class="contact-link">
              suporte@seusite.com.br
            </div>
            <p class="response-time">Suporte de Segunda a Sexta, 9h às 18h</p>
          </div>
        </section>

        <section>
          <h2>Horário de Atendimento</h2>
          <div class="hours-info">
            <p><strong>Segunda a Sexta:</strong> 9h às 18h (horário de Brasília)</p>
            <p><strong>Finais de Semana e Feriados:</strong> Fechado</p>
            <p class="note">
              Mensagens recebidas fora do horário de atendimento serão respondidas
              no próximo dia útil.
            </p>
          </div>
        </section>

        <section>
          <h2>Perguntas Frequentes</h2>
          <div class="faq-section">
            <div class="faq-item">
              <h3>Como recebo minha leitura numerológica?</h3>
              <p>
                Sua leitura será enviada para o e-mail cadastrado logo após a confirmação
                do pagamento.
              </p>
            </div>

            <div class="faq-item">
              <h3>Posso solicitar reembolso?</h3>
              <p>
                Por se tratar de conteúdo digital de entrega imediata, não oferecemos
                reembolso após o acesso ao conteúdo. Consulte nossos
                <router-link to="/termos-de-uso">Termos de Uso</router-link> para mais detalhes.
              </p>
            </div>

            <div class="faq-item">
              <h3>Como posso exercer meus direitos de privacidade?</h3>
              <p>
                Você pode solicitar acesso, correção ou exclusão de seus dados pessoais
                através do e-mail de contato. Veja nossa
                <router-link to="/politica-de-privacidade">Política de Privacidade</router-link>
                para mais informações.
              </p>
            </div>
          </div>
        </section>

        <section>
          <h2>Informações Legais</h2>
          <p>
            Para informações sobre nossos termos de serviço e política de privacidade:
          </p>
          <div class="legal-links">
            <router-link to="/termos-de-uso" class="legal-link-btn">
              📄 Termos de Uso
            </router-link>
            <router-link to="/politica-de-privacidade" class="legal-link-btn">
              🔒 Política de Privacidade
            </router-link>
          </div>
        </section>

        <section class="disclaimer-section">
          <p class="disclaimer">
            <strong>Aviso:</strong> Este site não faz parte do Facebook ou Meta.
            Além disso, NÃO somos endossados pelo Facebook de nenhuma maneira.
            FACEBOOK é uma marca registrada da Meta Platforms, Inc.
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
  name: 'PaginaContato'
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

.subtitle {
  color: #666;
  font-size: 1.1rem;
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

.legal-content h3 {
  font-size: 1.2rem;
  color: #333;
  margin: 15px 0 10px;
  font-weight: 600;
}

.legal-content p {
  line-height: 1.8;
  color: #333;
  margin-bottom: 15px;
}

/* Contact Methods */
.contact-methods {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  margin: 30px 0;
}

.contact-card {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  padding: 30px;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.contact-card:hover {
  transform: translateY(-5px);
}

.contact-icon {
  font-size: 3rem;
  margin-bottom: 15px;
}

.contact-link {
  display: inline-block;
  color: #ffdb60;
  background: #1a1a2e;
  padding: 10px 20px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  margin: 10px 0;
  transition: all 0.3s ease;
}

.contact-link:hover {
  background: #2a2a3e;
  transform: scale(1.05);
}

.response-time {
  font-size: 0.85rem;
  color: #666;
  font-style: italic;
  margin-top: 10px;
}

/* Hours Info */
.hours-info {
  background: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
  border-left: 4px solid #ffdb60;
}

.hours-info p {
  margin: 10px 0;
}

.hours-info .note {
  font-size: 0.9rem;
  color: #666;
  font-style: italic;
  margin-top: 15px;
}

/* FAQ Section */
.faq-section {
  margin-top: 20px;
}

.faq-item {
  background: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 15px;
  border-left: 4px solid #ffdb60;
}

.faq-item h3 {
  color: #1a1a2e;
  margin-top: 0;
}

.faq-item p {
  margin-bottom: 0;
}

.faq-item a {
  color: #1a1a2e;
  font-weight: 600;
  text-decoration: underline;
}

/* Legal Links */
.legal-links {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
  margin-top: 20px;
}

.legal-link-btn {
  display: inline-block;
  padding: 12px 25px;
  background: #1a1a2e;
  color: white;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.legal-link-btn:hover {
  background: #2a2a3e;
  transform: translateY(-2px);
}

/* Disclaimer */
.disclaimer-section {
  background: #fff3cd;
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #ffc107;
}

.disclaimer {
  margin: 0;
  color: #856404;
  font-size: 0.9rem;
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

  .contact-methods {
    grid-template-columns: 1fr;
  }

  .legal-links {
    flex-direction: column;
  }

  .legal-link-btn {
    width: 100%;
    text-align: center;
  }
}
</style>
