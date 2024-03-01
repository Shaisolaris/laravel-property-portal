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
                    item[additional.key] = `${additional.path}-${i + 1}`
                } else if (additional.items) {
                    item[additional.key] = additional.items[i] !== undefined ? additional.items[i] : null;
                }
            }
        } else if (Object.keys(additionalData).length > 0) {
            if (additionalData.path) {
                item[additionalData.key] = `${additionalData.path}-${i + 1}`;
            } else if (additionalData.items) {
                item[additionalData.key] = additionalData.items[i] !== undefined ? additionalData.items[i] : null;
            }
        }

        items.push(item);
    }

    return items;
}

const getTranslateContent = (name) => {
    switch (name) {
        case '':
            return '';
        case 'landing.academy.categories-page.section-1':
            return createObjectsArrayFunc([ 'title', 'text' ], [
                    { key: "icon", path: "page-landing-academy-categories-page-img" },
                    { key: "color", items: [ "light-blue", "light-pink", "light-yellow" ] }
                ],
                'landing.academy.categories-page.section-1.items',
                3);
        default:
            return [];
    }
}

const getBreadcrumbs = (key) => {
    switch (key) {
        case 'create-class':
            return [
                {
                    active: false,
                    href: route('school.class.list'),
                    title: 'classes'
                },
                {
                    active: true,
                    title: 'new-class'
                }
            ];
        case 'edit-class':
            return [
                {
                    active: false,
                    href: route('school.class.list'),
                    title: 'classes'
                },
                {
                    active: true,
                    title: 'edit-class'
                }
            ];
    }
}

export {
    getBreadcrumbs,
    getTranslateContent,
}