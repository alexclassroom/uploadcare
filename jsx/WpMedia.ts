export default interface WpMedia {
    alt?: string;
    author: number;
    authorName: string;
    caption?: string;
    date: Date;
    dateFormatted: string;
    description?: string;
    editLink: string;
    filename: string;
    height: number;
    width: number;
    icon: string;
    id: number;
    link: string;
    mime: string;
    modified: Date;
    name: string;
    orientation: string;
    status: string;
    subtype: string;
    title: string;
    type: string;
    url: string;
    sizes: TSize;
}

type TSize = {[key: string]: WpMediaSize}

interface WpMediaSize {
    height: number;
    width: number;
    orientation: string;
    url: string
}