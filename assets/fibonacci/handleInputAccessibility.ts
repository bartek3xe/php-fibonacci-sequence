export function handleInputAccessibility(
    selectInput: HTMLSelectElement,
    numberInput: HTMLInputElement,
    calcTypes: Object
): void {
    const selectedOption: string = selectInput.options[selectInput.selectedIndex]?.textContent;
    const selectedValue = calcTypes[selectedOption];

    numberInput.disabled = selectedValue !== null;
}
