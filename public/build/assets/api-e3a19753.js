import{a as e}from"./axios-4a70c6fc.js";function n(t){console.error("Error:",t)}function c(t){return e.get(`/api/${t}`).then(a=>a.data).catch(n)}function i(t,a){return e.get(`/api/${t}/${a}`).then(r=>r.data).catch(n)}function h(t,a){return e.post(`/api/${t}`,a).then(r=>r.data).catch(n)}export{c as a,h as c,i as g};