import { getCalcTypes } from './getCalcTypes';
import { handleInputAccessibility } from "./handleInputAccessibility";

window.addEventListener('DOMContentLoaded', () => {
    const selectInput: HTMLSelectElement = document.getElementById('calcType') as HTMLSelectElement;

    if (!selectInput) {
        console.error('0bdf8214-e9c7-4f33-a13d-211d92089eee');
        return;
    }

    const calcTypes: Object = getCalcTypes();
    const numberInput: HTMLInputElement = document.getElementById('inputNumber') as HTMLInputElement;

    if (!numberInput) {
        console.error('9732006e-68c0-4551-9f7f-23c5af079636')
        return;
    }

    selectInput.addEventListener('change', (): void => {
        handleInputAccessibility(selectInput, numberInput, calcTypes);
    })

    handleInputAccessibility(selectInput, numberInput, calcTypes);
})


