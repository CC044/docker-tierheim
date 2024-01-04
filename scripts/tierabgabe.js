'use_strict';

/** 
 * Focus auf das Formular setzen
 *
 * @var object formular
*/
async function main() {
  let formular = document.forms[0];
  formular.tierart.focus();
}

main();
