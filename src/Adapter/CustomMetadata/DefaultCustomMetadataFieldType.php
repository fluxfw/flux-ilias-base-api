<?php

namespace FluxIliasBaseApi\Adapter\CustomMetadata;

enum DefaultCustomMetadataFieldType: string implements CustomMetadataFieldType
{

    case FLOAT = "float";
    case INTEGER = "integer";
    case MULTIPLE_CHOICE = "multiple_choice";
    case SINGLE_CHOICE = "single_choice";
    case TEXT = "text";
}
