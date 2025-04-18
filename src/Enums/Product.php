<?php

namespace Weijiajia\Saloonphp\FiveSim\Enums;

/**
 * 产品枚举
 * 对应 5SIM 支持的所有产品类型
 * 文档参考：https://5sim.net/docs#products-list
 */
enum Product: string
{
    // 主要社交媒体和通讯应用
    case TELEGRAM = 'telegram';
    case WHATSAPP = 'whatsapp';
    case GOOGLE = 'google';
    case FACEBOOK = 'facebook';
    case INSTAGRAM = 'instagram';
    case TWITTER = 'twitter';
    case DISCORD = 'discord';
    case WECHAT = 'wechat';
    case LINE = 'line';
    case VIBER = 'viber';
    case SNAPCHAT = 'snapchat';
    case TIKTOK = 'tiktok';
    case LINKEDIN = 'linkedin';
    case SKYPE = 'skype';
    case KAKAOTALK = 'kakaotalk';
    case MESSENGER = 'messenger';
    case CLUBHOUSE = 'clubhouse';
    case SIGNAL = 'signal';
    case REDDIT = 'reddit';
    case VKONTAKTE = 'vkontakte';
    case ODNOKLASSNIKI = 'odnoklassniki';
    case ZALO = 'zalo';
    case TAMTAM = 'tamtam';
    case MEETME = 'meetme';
    case WEIBO = 'weibo';
    case BLUED = 'blued';
    case GRINDR = 'grindr';
    case BADOO = 'badoo';
    case TINDER = 'tinder';
    case HAPPN = 'happn';
    case BUMBLE = 'bumble';
    case TANTAN = 'tantan';
    case MAMBA = 'mamba';
    case HINGE = 'hinge';
    case ZOOM = 'zoom';

    // 电子商务和支付平台
    case AMAZON = 'amazon';
    case PAYPAL = 'paypal';
    case EBAY = 'ebay';
    case ALIPAY = 'alipay';
    case ALIEXPRESS = 'aliexpress';
    case WILDBERRIES = 'wildberries';
    case ALIBABA = 'alibaba';
    case SHOPEE = 'shopee';
    case LAZADA = 'lazada';
    case SHOPIFY = 'shopify';
    case WISH = 'wish';
    case OLX = 'olx';
    case AVITO = 'avito';
    case MERCARI = 'mercari';
    case TAOBAO = 'taobao';
    case ALLEGRO = 'allegro';
    case ETSY = 'etsy';
    case FLIPKART = 'flipkart';
    case OZON = 'ozon';
    case PINDUODUO = 'pinduoduo';
    case TEMU = 'temu';
    case WALLAPOP = 'wallapop';
    case VENMO = 'venmo';
    case REVOLUT = 'revolut';
    case WISE = 'wise';
    case PAYSEND = 'paysend';
    case SKRILL = 'skrill';
    case ASTROPAY = 'astropay';
    case GCASH = 'gcash';

    // 食品配送和打车服务
    case UBER = 'uber';
    case DOORDASH = 'doordash';
    case BOLT = 'bolt';
    case LYFT = 'lyft';
    case GOJEK = 'gojek';
    case GLOVO = 'glovo';
    case FOODPANDA = 'foodpanda';
    case DELIVEROO = 'deliveroo';
    case INDRIVER = 'indriver';
    case GRAB = 'grab';
    case WOLT = 'wolt';
    case SWIGGY = 'swiggy';
    case ZOMATO = 'zomato';
    case CITYMOBIL = 'citymobil';
    case GRABTAXI = 'grabtaxi';
    case DIDI = 'didi';

    // 娱乐和流媒体
    case NETFLIX = 'netflix';
    case SPOTIFY = 'spotify';
    case STEAM = 'steam';
    case APPLE = 'apple';
    case MICROSOFT = 'microsoft';
    case YOUTUBE = 'youtube';
    case TWITCH = 'twitch';
    case HUYA = 'huya';
    case PUBG = 'pubg';
    case BLIZZARD = 'blizzard';
    case EPICGAMES = 'epicgames';
    case TENCENT = 'tencent';
    case UBISOFT = 'ubisoft';
    case ROBLOX = 'roblox';
    case DISNEYHOTSTAR = 'disneyhotstar';
    case SONYLIV = 'sonyliv';
    case HOYOVERSE = 'hoyoverse';

    // 金融和加密货币
    case COINBASE = 'coinbase';
    case CRYPTOCOM = 'cryptocom';
    case BINANCE = 'binance';
    case BLOCKCHAIN = 'blockchain';
    case PAYONEER = 'payoneer';
    case PAYEER = 'payeer';
    case BET365 = 'bet365';
    case PAYBIS = 'paybis';
    case PAXFUL = 'paxful';

    // AI和云服务
    case OPENAI = 'openai';
    case CLAUDEAI = 'claudeai';
    case GOOGLEVOICE = 'googlevoice';
    case MISTRALAI = 'mistralai';
    case GEMINI = 'gemini';
    case ORACLECLOUD = 'oraclecloud';
    case LINODE = 'linode';
    case KAGGLE = 'kaggle';
    case VERCEL = 'vercel';
    case PAPERSPACE = 'paperspace';

    // 电子邮件服务
    case OUTLOOK = 'outlook';
    case YAHOO = 'yahoo';
    case MAILRU = 'mailru';
    case PROTONMAIL = 'protonmail';
    case GMX = 'gmx';
    case WEBDE = 'webde';
    case YANDEX = 'yandex';
    case RAMBLER = 'rambler';
    case FASTMAIL = 'fastmail';
    case AOL = 'aol';
    case HOTMAIL = 'hotmail';

    // 本地服务和分类广告
    case CRAIGSLIST = 'craigslist';
    case GUMTREE = 'gumtree';
    case AIRBNB = 'airbnb';
    case LEBONCOIN = 'leboncoin';
    case SUBITO = 'subito';
    case CIAN = 'cian';
    case IMMOSCOUT24 = 'immoscout24';
    case IDEALISTA = 'idealista';
    case FOTOCASA = 'fotocasa';
    case MARKTPLAATS = 'marktplaats';
    case BLABLACAR = 'blablacar';
    case JUSTDIAL = 'justdial';

    // 电信运营商
    case AIRTEL = 'airtel';
    case IRANCELL = 'irancell';
    case VODAFONE = 'vodafone';
    case ORANGE = 'orange';
    case BEELINE = 'beeline';
    case MEGAFON = 'megafon';
    case MTS = 'mts';
    case TELE2 = 'tele2';
    case ROSTELCOM = 'rostelecom';

    // 健康和生活方式
    case NYKAA = 'nykaa';
    case PHARMEASY = 'pharmeasy';
    case LENSKART = 'lenskart';
    case UNACADEMY = 'unacademy';
    case VEDANTU = 'vedantu';
    case BYJU = 'byju';
    case CLASSPASS = 'classpass';
    case HEALTHANDGLOW = 'healthandglow';

    // 银行和金融服务
    case PAYTM = 'paytm';
    case PHONEPE = 'phonepe';
    case KOTAK811 = 'kotak811';
    case DIVAR = 'divar';
    case DHANI = 'dhani';
    case CASHKARO = 'cashkaro';
    case BAJAJFINSERV = 'bajajfinserv';
    
    // 游戏和赌博
    case POKERMASTER = 'pokermaster';
    case POKERBAAZI = 'pokerbaazi';
    case RUMMYCIRCLE = 'rummycircle';
    case TEEN = 'teen';
    case MPL = 'mpl';
    case WINZO = 'winzo';
    case DREAM11 = 'dream11';
    case PARIMATCH = 'parimatch';
    case BETFAIR = 'betfair';
    case BETANO = 'betano';
    
    // 零售和杂货
    case BIGBASKET = 'bigbasket';
    case BLINKIT = 'blinkit';
    case DUNZO = 'dunzo';
    case MYNTRA = 'myntra';
    case AJIO = 'ajio';
    case CARREFOUR = 'carrefour';
    case LIDL = 'lidl';
    case BIEDRONKA = 'biedronka';
    case PEREKRESTOK = 'perekrestok';
    case PYATEROCHKA = 'pyaterochka';
    case MAGNIT = 'magnit';
    case MCDONALD = 'mcdonalds';
    case KFC = 'kfc';
    case DOMINOSPIZZA = 'dominospizza';
    case BURGERKING = 'burgerking';
    
    // 其他服务
    case AUTHY = 'authy';
    case TRUECALLER = 'truecaller';
    case OTHER = 'other';
}