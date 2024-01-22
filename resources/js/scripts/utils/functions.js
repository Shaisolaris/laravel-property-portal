const containsUppercase = (str) => {
    return /[A-Z]/.test(str);
}

const convertCamelCaseToKebabCase = (str) => {
    return str.replace(/([a-z0-9]|(?=[A-Z]))([A-Z])/g, '$1-$2').toLowerCase();
}

const createItemsArrayFunc = (key, count = 4) => {
    let items = [];

    for (let i = 0; i < count; i++) {
        items.push(`${key}.${i}`);
    }

    return items;
}

const createObjectsArrayFunc = (keysArray = [], additionalData = {}, basicKey = '', itemsLength) => {
    const items = [];
    let numberOfItems;

    if (Array.isArray(additionalData)) {
        numberOfItems = additionalData[0] && additionalData[0].items ? additionalData[0].items.length : itemsLength;
    } else {
        numberOfItems = additionalData.items ? additionalData.items.length : itemsLength;
    }

    for (let i = 0; i < numberOfItems; i++) {
        let item = {};

        for (const key of keysArray) {
            const newKey = containsUppercase(key) ? convertCamelCaseToKebabCase(key) : key;

            if (key.includes('_')) {
                item[key.replace('_', '')] = `${basicKey}.${i}`;
            } else {
                item[key] = `${basicKey}.${i}.${newKey}`;
            }
        }

        if (Array.isArray(additionalData)) {
            for (const additional of additionalData) {
                if (additional.path) {
                    item[additional.key] = `${additional.path}-${i+1}`
                } else if (additional.items) {
                    item[additional.key] = additional.items[i] !== undefined ? additional.items[i] : null;
                }
            }
        } else if (Object.keys(additionalData).length > 0) {
            if (additionalData.path) {
                item[additionalData.key] = `${additionalData.path}-${i+1}`;
            } else if (additionalData.items) {
                item[additionalData.key] = additionalData.items[i] !== undefined ? additionalData.items[i] : null;
            }
        }

        items.push(item);
    }

    return items;
}

const copy = (value) => {
    const el = document.createElement('textarea');
    el.value = value;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}

export {
    copy,
    createItemsArrayFunc,
    createObjectsArrayFunc
}