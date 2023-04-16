FROM php

WORKDIR ./atp-library

COPY ./index.php ./

CMD ["php", "-S", "0.0.0.0:3000"]