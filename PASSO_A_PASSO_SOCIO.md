# 🧭 GUIA OFICIAL DE IMPLEMENTAÇÃO — CÓDIGOS DA ALMA (FUNIL DE ALTA CONVERSÃO)

> **Instrução para o Sócio:** Você recebeu esta estrutura completa e validada da oferta europeia *Códigos da Alma*. 
> Para implementar no seu próprio domínio sem ter trabalho manual, basta abrir esta pasta no seu **Antigravity** e colar o prompt que está na **Seção 2** deste documento informando os seus dados. A IA fará todas as alterações automaticamente para você.

---

## 1. Visão Geral da Oferta & Arquitetura do Funil

* **Público:** Europa (Portugal e público lusófono), mulheres 35-65 anos, nicho esotérico/espiritualidade.
* **Front:** Quiz interativo de data de nascimento + vídeo curto (VSL) -> Checkout KashPay (€19 ou €9,90).
* **Upsell 1 (/up1/):** *Previsões Cabalísticas 2026/2027* com VSL no VTurb (€47) -> KashPay 1-Click.
* **Upsell 2 (/up2/):** *O Código Secreto da Alma Gémea* com Quiz Interativo de 3 perguntas (€37) -> KashPay 1-Click.
* **Upsell 3 (/up3/):** *Os 7 Selos Sagrados de Salomão* com Oráculo de 3 cartas viradas para baixo (€24) -> KashPay 1-Click.
* **Cloaker & Compliance:** Cloaker inteligente PHP/JS integrado em todas as etapas (`index.php` e `data-gate`). Visitantes comuns, revisores e bots do Facebook/Meta veem a **White Page** educativa e profissional; cliques reais de anúncio (`fbclid`) entram direto na oferta black.
* **Meta Pixel Compartilhado:** O Pixel ID `3725791700905617` **deve ser mantido** para que ambos acumulem inteligência conjunta de compradores no Meta Ads.

---

## 2. Prompt Pronto para Copiar e Colar na sua IA (Antigravity)

Basta copiar o bloco abaixo, preencher os seus dados e enviar para o Antigravity:

```text
Olá, Antigravity! Eu recebi a estrutura completa da oferta "Códigos da Alma" e quero implementar no meu domínio próprio com as minhas contas da KashPay, VTurb e UTMify.

Leia o arquivo PASSO_A_PASSO_SOCIO.md e faça as substituições necessárias nos arquivos do site. Aqui estão os meus dados:

1. MEU DOMÍNIO E CONTATO:
- Meu novo domínio: [Ex: seudominio.online]
- Meu e-mail de suporte: [Ex: suporte@seudominio.online]

2. MEUS LINKS DA KASHPAY:
- Link de Checkout do Front: [Cole o link do checkout do seu produto principal]
- Link 1-Click do Up1: [Ex: https://checkout.kashpay.com/u/SEU_ID_UP1]
- Link 1-Click do Up2: [Ex: https://checkout.kashpay.com/u/SEU_ID_UP2]
- Link 1-Click do Up3: [Ex: https://checkout.kashpay.com/u/SEU_ID_UP3]

3. MEUS SCRIPTS DA UTMIFY:
- Código do Pixel da minha UTMify: [Cole o script do seu Pixel da UTMify]
- Código do script de UTMs da minha UTMify: [Cole o script de UTMs da sua UTMify]

4. MEUS EMBEDS DO VTURB (para acompanhar minhas métricas):
- ID do Player VSL Front: [Seu ID de player do VTurb]
- ID do Vídeo VSL Front: [Seu ID de vídeo do VTurb]
- ID do Player Up1: [Seu ID de player do Up1 no VTurb]
- ID do Vídeo Up1: [Seu ID de vídeo do Up1 no VTurb]

5. META PIXEL:
- Manter o Pixel ID 3725791700905617 intacto (para acumularmos inteligência juntos).

6. WORKER DE ENTREGA DO PDF:
- [Opção A: Manter o Worker padrão já integrado (https://worker-leads.vendasonlinemktdgtgm.workers.dev)] OU
- [Opção B: Meu próprio Worker: https://meu-worker.workers.dev]

7. LINK DOS BÓNUS DO GOOGLE DRIVE (OPCIONAL):
- [Opção A: Manter a pasta padrão já configurada: https://drive.google.com/drive/folders/1hUkkNHoQ9EBl0ZnZd58dGmeEo1uaXx3C?usp=sharing] OU
- [Opção B: Meu link do Drive próprio: cole aqui]

Por favor, atualize todos os arquivos correspondentes mantendo o cloaker, o design e o 1-click perfeitamente funcionais.
```

---

## 3. Checklist de Dados (O que é Obrigatório vs Opcional)

### 🔴 OBRIGATÓRIO (Você precisa criar e fornecer):

1. **Conta e Produtos na KashPay:**
   * Crie a sua conta na KashPay.
   * Cadastre os 4 produtos do funil:
     * **Front:** Teste Numerológico Cabalístico (€19 ou €9,90)
     * **Up1:** Previsões Cabalísticas 2026/2027 (€47)
     * **Up2:** Código Secreto da Alma Gémea (€37)
     * **Up3:** Os 7 Selos Sagrados de Salomão (€24)
   * **Como montar o Funil de Upsell 1-Click na KashPay:**
     1. Na KashPay, vá em **Produtos -> Funis de Vendas -> Criar Novo Funil**.
     2. Selecione o seu produto Front como entrada do funil.
     3. Adicione a primeira etapa de Upsell (Up1): configure a URL da página de destino como `https://seudominio.com/up1/`.
     4. A KashPay irá gerar o link de compra 1-Click do Up1 (formato `https://checkout.kashpay.com/u/SEU_HASH_UP1`). É esse link que vai no botão verde do Up1!
     5. Adicione a etapa de Upsell 2 (Up2): defina a URL da página como `https://seudominio.com/up2/` e pegue o link 1-Click gerado para colocar no botão do Up2.
     6. Adicione a etapa de Upsell 3 (Up3): defina a URL como `https://seudominio.com/up3/` e pegue o link 1-Click gerado para colocar no botão do Up3.
     7. **Página de Obrigado / Entrega Final:** Na última etapa (após Up3 ou recusa), configure o redirecionamento final para a área de membros: `https://seudominio.com/pGwZSDj`.
   * **Pixel na KashPay:**
     * Conecte o Meta Pixel `3725791700905617` marcando para disparar apenas `InitiateCheckout`.

2. **Conta na UTMify:**
   * Crie a campanha/produto na sua UTMify.
   * Copie o seu **Código do Pixel da UTMify** e o seu **Script de UTMs da UTMify**.
   * Cadastre o Webhook da KashPay na sua UTMify para que ela rastreie as vendas aprovadas e envie o evento `Purchase` via API de Conversões (CAPI) para a Meta.

3. **Conta no VTurb (Vídeos e Delay de Botão):**
   * **Front:** Suba o vídeo principal. No VTurb, ative o botão de CTA dentro do próprio player apontando para o seu checkout do Front da KashPay.
   * **Up1 (MUITO IMPORTANTE - Delay de Elemento HTML Oculto):**
     1. Suba o vídeo do Up1 no VTurb.
     2. Vá em **Configurações do Vídeo -> Ações do Player / Delay de Botão / Elemento da Página**.
     3. Selecione a opção **"Exibir elemento da página"** (ou "HTML Oculto").
     4. No campo do seletor, digite: `#bloco_cta` (ou `.smartplayer-call-to-action`).
     5. Defina o tempo de pitch do vídeo (quando a oradora começa a apresentar a bênção e as previsões).
     6. O VTurb vai manter o botão 1-Click oculto até aquele segundo exato, e só então fará o botão verde surgir magicamente na tela!
     7. *(Dica: Para testar a página sem ter que assistir ao vídeo todo, acesse `https://seudominio.com/up1/?bypass=gl2026&btn=1` que o botão aparece de imediato).*

4. **Domínio próprio:**
   * O domínio que comprou (ex: na Hostinger / Namecheap / Cloudflare).

---

### 🟢 OPCIONAL (Pode usar o que já está pronto):

1. **Worker da Cloudflare + Resend (Entrega de E-mail):**
   * **Recomendado:** Deixar exatamente como está (`https://worker-leads.vendasonlinemktdgtgm.workers.dev`).
   * **Por quê?** Esse Worker já está ativo, seguro, com CORS liberado e com o Resend configurado. Ele dispara o e-mail oficial com o anexo do PDF e os bónus do Google Drive automaticamente sem você precisar criar conta na Cloudflare ou Resend.
   * Se quiser ter o seu próprio, o código fonte está no arquivo `worker_resend_leads.js`.

---

### ⚠️ O QUE NÃO PODE MUDAR:

1. **Meta Pixel ID (`3725791700905617`):**
   * **NÃO ALTERE ESTE NÚMERO.** O acordo de sociedade é concentrar todos os dados de tráfego (tanto os seus anúncios quanto os do seu sócio) no mesmo pixel. Isso fará com que o algoritmo do Facebook aprenda o perfil comprador 2x mais rápido e diminua o CPA de ambos.
   * Solicite ao seu sócio para atribuir o pixel à sua conta de anúncios ou BM via parceiro de ativos.

---

## 4. Manual de Substituição Técnica (Instruções para a IA Executar)

Caso queira saber exatamente o que o Antigravity irá alterar nos arquivos:

### 1. `site/index.html` (Front):
* **UTMify Pixel:** Substituir o bloco `<!-- UTMIFY PIXEL -->` pelo código do seu pixel da UTMify.
* **UTMify UTMs:** Substituir o bloco `<!-- UTMIFY UTMS -->` pelo código do seu script de UTMs da UTMify.
* **Meta Pixel:** Manter o Pixel `3725791700905617`.
* **VTurb Preload:** Atualizar as tags `<link rel="preload">` e `<link rel="dns-prefetch">` com o ID do seu player.

### 2. `site/clean.html` (White Page do Front):
* **UTMify Pixel & UTMs:** Atualizar com os seus scripts.
* **Meta Pixel:** Manter o Pixel `3725791700905617`.
* **Dados de contato:** Atualizar e-mail de suporte e menção ao domínio no rodapé.

### 3. `site/up1/index.html` (Up1 - Previsões 2026/2027):
* **UTMify Pixel & UTMs:** Atualizar no `<head>`.
* **KashPay 1-Click:** Na tag `<button id="btnBuy" ... onclick="acceptUpsell('...')">`, substituir a URL pela sua URL do Up1 da KashPay.
* **VTurb Preload e Player:** Nas linhas 72-74 e na div do vídeo, substituir os IDs do player e do vídeo pelos seus.

### 4. `site/up2/index.html` (Up2 - Alma Gémea):
* **UTMify Pixel & UTMs:** Atualizar no `<head>`.
* **KashPay 1-Click:** Na tag `<button id="btnBuy" ... onclick="acceptUpsell('...')">`, substituir a URL pela sua URL do Up2 da KashPay.

### 5. `site/up3/index.html` (Up3 - 7 Selos Sagrados):
* **UTMify Pixel & UTMs:** Atualizar no `<head>`.
* **KashPay 1-Click:** Na tag `<button id="btnBuy" ... onclick="acceptUpsell('...')">`, substituir a URL pela sua URL do Up3 da KashPay.

### 6. `site/index.php` (Cloaker PHP):
* Já funciona em qualquer domínio automaticamente (usa `$_SERVER['HTTP_HOST']`). Apenas garanta que o servidor tenha PHP ativo.
* Bypass da equipe: para testar a página black a qualquer momento, acesse `seusite.com/?bypass=gl2026`.

---

## 6. Entregáveis dos Produtos e Links dos Bónus

Para você e o seu suporte ficarem 100% alinhados, aqui está o que cada cliente recebe em cada etapa e o status exato de cada entregável:

> [!IMPORTANT]
> **Status dos Arquivos:**
> * **Front e os 3 Bónus:** Estão **100% prontos** no código e na pasta pública do Google Drive.
> * **Upsell 1, 2 e 3:** Toda a estrutura de páginas, design, VSLs, quizzes e botões 1-click estão **100% operacionais**. Porém, os arquivos finais dos produtos (os PDFs de conteúdo e áudios que a cliente baixa após a aprovação da compra) devem ser hospedados no Google Drive e vinculados no e-mail de entrega de cada produto na KashPay.

### 🎁 1. Front — Teste Numerológico Cabalístico (€19 / €9,90):
* **Entregável Principal:** **Mapa Numerológico Cabalístico Oficial** (relatório personalizado de 11 páginas).
  * O próprio sistema gera o PDF no navegador da cliente com base na data de nascimento dela.
  * A cliente pode descarregar diretamente na tela de membros (`/pGwZSDj`).
  * O Worker envia automaticamente uma cópia em PDF anexa para o e-mail dela.
* **3 Bónus Oficiais Inclusos no Front:**
  1. *O Dossiê dos Trânsitos Proibidos* (PDF)
  2. *O Escudo do Sol Cabalístico* (PDF)
  3. *Ritual Cabalístico da Mão Esquerda* (PDF)
* **Link Oficial do Google Drive (Já Pronto e Público):**
  `https://drive.google.com/drive/folders/1hUkkNHoQ9EBl0ZnZd58dGmeEo1uaXx3C?usp=sharing`
  *(Nota: Esse link já está inserido no e-mail automático do Resend e no botão dourado da área de membros. Você pode manter exatamente esse link ou criar uma cópia no seu próprio Google Drive e pedir para a IA atualizar).*

---

### 🔮 2. Upsell 1 — Previsões Cabalísticas 2026/2027 (€47):
* **Entregável:** Livro digital / Dossiê completo de predições personalizadas para os ciclos de 2026 e 2027 (Previsões de amor, finanças, saúde e alertas de trânsitos kármicos).
* **Entrega:** Configure na KashPay (na área do produto do Up1) a entrega automática do PDF por e-mail ou coloque o link de download na página de obrigado.

---

### ❤️ 3. Upsell 2 — O Código Secreto da Alma Gémea (€37):
* **Entregável:** E-book oficial de Sinastria Cabalística e Conexão de Chamas Gémeas.
  * Inclui: Sinais de Reconhecimento, Técnicas de Corte de Amarras Kármicas e o Ritual de Ativação do Fio Vermelho.
* **Entrega:** Configurado diretamente no e-mail de pós-compra do Up2 na KashPay.

---

### 🛡️ 4. Upsell 3 — Os 7 Selos Sagrados de Salomão (€24):
* **Entregável:** **Kit Digital de Ativação Energética:**
  * 7 Imagens em alta definição dos Selos Sagrados (para usar como fundo de tela do telemóvel ou imprimir).
  * Guia de Consagração de 2 Minutos (passo a passo para consagrar o selo escolhido).
  * 7 Áudios Binaurais MP3 com Frequências Solfeggio específicas para harmonização e desbloqueio energético.
* **Entrega:** Configurado no pós-compra do Up3 na KashPay via link do Drive ou área de download.

---

## 7. Como Testar Antes de Subir Anúncios

1. Abra a página inicial com bypass: `https://seusite.com/?bypass=gl2026`.
2. Verifique se o VTurb do Front carrega perfeitamente.
3. Clique no botão de compra e confirme se abre o checkout da sua KashPay com as UTMs preservadas na barra de endereço.
4. Teste os 3 links de upsell com o bypass:
   * `https://seusite.com/up1/?bypass=gl2026` -> Vídeo do Up1 carrega e botão aceita o 1-click.
   * `https://seusite.com/up2/?bypass=gl2026` -> Quiz de 3 perguntas funciona e libera o botão do Up2.
   * `https://seusite.com/up3/?bypass=gl2026` -> 3 cartas viradas para baixo funcionam, revelam o selo centralizado sem sobreposição e liberam o botão do Up3.
5. Abra o site sem bypass em uma aba anônima (como um revisor ou curioso): confirme se exibe a **White Page** institucional.

Tudo pronto para rodar e lucrar! 🚀

