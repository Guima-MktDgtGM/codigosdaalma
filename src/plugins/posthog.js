export default {
  install(Vue) {
    // PostHog desativado para segurança e privacidade da operação
    Vue.prototype.$posthog = {
      capture: () => {},
      identify: () => {},
      reset: () => {}
    };
  }
};
