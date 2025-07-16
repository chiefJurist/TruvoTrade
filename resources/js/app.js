import './bootstrap';
import { countries } from './countries';

document.addEventListener('DOMContentLoaded', () => {
  const select = document.getElementById('countrySelect');
  if (!select) return;

  countries.forEach(country => {
    const option = document.createElement('option');
    option.value = country.name;
    option.textContent = country.name;
    select.appendChild(option);
  });
});