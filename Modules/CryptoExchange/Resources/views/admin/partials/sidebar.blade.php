@if (isActive('CryptoExchange') && (Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_exchange_transaction') || Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_direction') || Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_exchange_settings') ))
    <li <?= (isset($menu) &&  $menu == 'crypto_exchange') ? ' class="active treeview"' : 'treeview'?> >
        <a href="#">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none" >
                    <path d="M2245 4940 c-165 -94 -309 -180 -320 -191 -19 -19 -20 -34 -22 -332 l-3 -312 -252       -158   -253 -158 -6 78 c-3 43 -9 85 -13 93 -9 21 -618 370 -645
                        370 -21 0 -598 -325 -633 -357 -16 -15 -18 -44 -18 -337 0 -177 4 -327 9 -335
                        5 -7 134 -82 287 -165 l279 -153 0 -404 0 -404 -265 -152 c-146 -83 -275 -158
                        -287 -167 l-23 -17 0 -329 0 -330 37 -24 c92 -59 595 -326 614 -326 11 0 136
                        63 276 139 l255 139 324 -215 324 -216 0 -162 c0 -118 3 -165 13 -173 6 -6
                        149 -85 317 -177 230 -125 311 -165 330 -161 29 6 608 320 630 342 12 11 16
                        49 18 177 l4 162 318 212 318 212 256 -140 c140 -76 265 -139 276 -139 19 0
                        560 289 623 332 l27 19 0 329 0 329 -24 18 c-13 10 -143 86 -290 168 l-265
                        150 2 404 2 403 278 153 c154 83 283 158 288 166 5 8 9 158 9 335 0 320 0 321
                        -22 341 -37 33 -606 353 -628 353 -26 0 -637 -349 -646 -369 -4 -9 -10 -51
                        -13 -94 l-6 -78 -253 158 -252 159 -3 312 c-2 296 -3 312 -22 331 -28 28 -593
                        351 -624 357 -20 4 -93 -33 -326 -166z m535 -107 c121 -69 219 -127 218 -128
                        -13 -11 -431 -235 -438 -235 -5 0 -100 50 -212 111 -112 62 -209 115 -216 119
                        -9 4 68 53 205 132 120 70 219 127 221 127 1 1 101 -56 222 -126z m-501 -373
                        l211 -115 0 -213 0 -213 -87 48 c-49 26 -146 79 -218 119 l-130 71 -3 212 c-1
                        126 1 211 7 209 5 -1 104 -55 220 -118z m789 -92 l-3 -213 -125 -68 c-69 -37
                        -167 -90 -217 -118 l-93 -50 0 213 0 213 213 116 c116 65 215 117 220 118 4 1
                        6 -95 5 -211z m-2107 -319 c115 -67 209 -122 207 -124 -10 -8 -430 -235 -436
                        -235 -4 0 -105 54 -225 119 l-218 118 218 126 c120 69 224 124 231 121 7 -2
                        107 -58 223 -125z m3651 4 l221 -126 -29 -15 c-16 -8 -114 -62 -218 -118 -104
                        -57 -192 -104 -196 -104 -4 0 -93 47 -198 104 -105 58 -203 111 -218 119 -26
                        14 -24 15 192 140 121 69 220 126 222 126 1 1 102 -56 224 -126z m-2354 -167
                        l227 -125 0 -267 0 -267 -250 -143 c-137 -79 -255 -143 -261 -141 -5 1 -140
                        87 -300 191 l-289 188 5 151 5 150 305 193 c168 106 311 193 318 193 7 1 115
                        -55 240 -123z m1159 -69 l308 -193 5 -151 5 -151 -289 -189 c-159 -103 -294
                        -189 -300 -190 -6 -2 -123 62 -261 141 l-250 143 0 267 0 267 225 124 c124 68
                        230 124 237 124 6 1 150 -86 320 -192z m-2971 -134 l214 -117 0 -213 0 -213
                        -67 37 c-38 21 -135 74 -218 119 l-150 82 -3 211 c-1 116 0 211 4 211 3 0 102
                        -53 220 -117z m804 -91 l0 -207 -172 -94 c-95 -52 -197 -107 -225 -124 l-53
                        -29 0 214 0 213 213 117 c116 64 218 117 225 117 9 1 12 -47 12 -207z m2855
                        91 l215 -118 0 -213 0 -213 -88 48 c-48 26 -150 82 -225 123 l-137 75 0 208
                        c0 132 4 207 10 207 6 0 107 -53 225 -117z m793 -94 l-3 -211 -145 -80 c-80
                        -43 -178 -97 -217 -119 l-73 -40 0 213 0 213 213 117 c116 64 215 117 220 117
                        4 1 6 -94 5 -210z m-3316 -562 l313 -204 3 -260 2 -261 -287 -202 c-158 -111
                        -292 -204 -298 -206 -5 -2 -123 60 -260 140 l-250 143 0 402 0 403 225 123
                        c124 68 228 124 232 125 5 0 149 -92 320 -203z m2508 79 l225 -124 0 -403 0
                        -403 -250 -143 c-137 -79 -254 -141 -260 -139 -5 2 -139 95 -298 206 l-287
                        203 2 260 3 260 310 203 c171 111 315 203 320 203 6 0 111 -55 235 -123z
                        m-1306 -125 c119 -68 215 -125 214 -126 -18 -17 -433 -235 -443 -233 -21 5
                        -434 232 -430 237 10 10 431 249 436 248 3 -1 103 -58 223 -126z m-506 -371
                        l212 -115 0 -213 0 -213 -97 52 c-54 29 -152 83 -218 119 l-120 67 -3 212 c-1
                        117 1 211 6 209 5 -1 104 -55 220 -118z m790 -92 l-3 -213 -125 -68 c-69 -37
                        -167 -91 -217 -118 l-93 -50 0 213 0 213 213 116 c116 65 215 117 220 118 4 1
                        6 -95 5 -211z m-828 -472 l245 -134 0 -282 0 -282 -270 -155 c-148 -85 -279
                        -163 -290 -174 -15 -15 -20 -36 -23 -93 l-4 -75 -257 171 c-141 94 -256 171
                        -256 172 0 0 2 131 5 291 l5 289 285 203 c157 111 292 202 300 202 8 0 125
                        -60 260 -133z m1203 -71 l286 -200 1 -277 c0 -152 2 -282 5 -290 3 -8 -87 -74
                        -254 -185 l-258 -171 -5 75 c-4 55 -10 79 -24 93 -10 10 -140 88 -289 173
                        l-270 154 -3 281 -2 280 247 136 c137 75 255 135 264 133 9 -1 145 -92 302
                        -202z m-2504 -37 c108 -61 204 -117 214 -123 15 -11 -10 -28 -196 -129 -118
                        -64 -220 -116 -226 -116 -6 0 -108 53 -226 117 -199 109 -213 118 -192 130 12
                        7 108 61 212 122 105 60 196 110 204 110 7 1 102 -49 210 -111z m3675 -9 c116
                        -67 212 -123 213 -124 5 -3 -425 -235 -437 -235 -12 0 -442 231 -438 236 14
                        13 426 244 437 244 8 0 109 -55 225 -121z m-4062 -427 l108 -57 0 -213 0 -213
                        -112 60 c-62 34 -161 87 -220 119 l-108 57 0 213 0 213 113 -60 c61 -34 160
                        -87 219 -119z m696 -32 l-3 -211 -219 -119 c-120 -66 -220 -120 -222 -120 -3
                        0 -3 95 -2 212 l3 211 215 118 c118 65 218 118 223 119 4 0 6 -95 5 -210z
                        m2852 92 l215 -117 3 -214 c1 -117 -1 -211 -6 -209 -5 1 -106 56 -225 121
                        l-217 118 0 210 c0 115 3 209 8 209 4 0 104 -53 222 -118z m800 -94 l0 -213
                        -108 -57 c-59 -32 -158 -85 -219 -119 l-113 -60 0 213 1 213 217 117 c119 65
                        218 118 220 118 1 0 2 -96 2 -212z m-2116 -367 c119 -68 215 -125 214 -126
                        -11 -10 -429 -235 -438 -235 -7 0 -424 223 -438 235 -4 3 432 253 439 251 3 0
                        103 -57 223 -125z m-506 -371 l212 -115 0 -213 0 -213 -92 50 c-51 27 -149 81
                        -218 118 l-125 68 -3 214 c-1 117 1 211 6 209 5 -1 104 -55 220 -118z m790
                        -92 l-3 -213 -125 -68 c-69 -37 -167 -91 -217 -118 l-93 -50 0 213 1 213 212
                        116 c117 65 215 117 220 118 4 1 6 -95 5 -211z" />
                </g>
            </svg>
            <span>{{ __('Crypto Exchange') }}</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            
            <!-- Crypto Exchange Direction -->
            @if(Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_direction'))
                <li <?= isset($sub_menu) && $sub_menu == 'exchange_directions' ? ' class="active child"' : 'child'?> >
                    <a href="{{ route('admin.crypto_direction.index') }}"><i class="fa fa-exchange"></i><span>{{ __('Directions') }}</span></a>
                </li>
            @endif

            <!-- Transaction -->
            @if(Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_exchange_transaction'))
            <li <?= isset($sub_menu) && $sub_menu == 'crypto_exchanges' ? ' class="active child"' : 'class="child"'?> >
                <a href="{{ route('admin.crypto_exchanges.index') }}"><i class="fa fa-money"></i><span>{{ __('Transactions') }}</span></a>
            </li>
            @endif

            @if(Common::has_permission(\Auth::guard('admin')->user()->id, 'view_crypto_exchange_settings'))
            <li class="{{ isset($sub_menu) && $sub_menu == 'crypto_settings' ? 'active child' : 'child' }}">
                <a href="{{ route('admin.crypto_settings') }}">
                    <i class="fa fa-wrench"></i><span>{{ __('Settings') }}</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            @endif

        </ul>
    </li>
@endif