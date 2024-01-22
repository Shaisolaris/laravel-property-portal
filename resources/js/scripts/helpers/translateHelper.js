import { createItemsArrayFunc, createObjectsArrayFunc } from "@/scripts/utils/functions.js";


export function useTranslateHelper() {
    const getTranslateContent = (name) => {
        switch (name) {
            case '':
                return '';
            default:
                return [];
        }
    }
}