export function getCalcTypes(): Object {
    const calcTypesElement: HTMLElement | null = document.getElementById('dataCalcTypes');
    const calcTypesData: string | null = calcTypesElement?.getAttribute('data-calc-types');

    if (!calcTypesData) {
        console.error('4853be4a-89c8-4e41-9e13-784d4b9daed4');
        return {};
    }

    try {
        return JSON.parse(calcTypesData);
    } catch (error) {
        console.error('d5bbf88d-3e16-4560-8c27-5c59fdf848b9');
        return {};
    }
}
