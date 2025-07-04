<?php
/**
 * This file is part of the Billbee Custom Shop API package.
 *
 * Copyright 2019-2022 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace Billbee\CustomShopApi\Http;

use MintWare\Streams\MemoryStream;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @template T
 */
abstract class Message implements MessageInterface
{
    protected string $protocolVersion = "2.0";

    /** @var array<array<string>> */
    protected array $headers = [];

    /** @var StreamInterface */
    protected StreamInterface $body;

    public function __construct()
    {
        $this->body = new MemoryStream(null);
    }

    public function getProtocolVersion(): string
    {
        return $this->protocolVersion;
    }

    /**
     * @inheritDoc
     * @phpstan-return T
     */
    public function withProtocolVersion($version): MessageInterface
    {
        /** @var T $request */
        $request = clone $this;
        $request->protocolVersion = $version;

        return $request;
    }

    /** @inheritDoc */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /** @inheritDoc */
    public function getHeaderLine($name): string
    {
        $line = "";

        if ($this->hasHeader($name)) {
            $header = $this->getHeader($name);
            $header = !is_array($header) ? [$header] : $header;
            $line = implode(",", $header);
        }

        return $line;
    }

    /** @inheritDoc */
    public function hasHeader($name): bool
    {
        return isset($this->headers[$name]);
    }

    /** @inheritDoc */
    public function getHeader($name): array
    {
        return $this->headers[$name] ?? [];
    }

    /**
     * @inheritDoc
     * @phpstan-return T
     */
    public function withAddedHeader($name, $value): MessageInterface
    {
        return $this->withHeader($name, $value);
    }

    /**
     * @inheritDoc
     * @phpstan-return T
     */
    public function withHeader($name, $value): MessageInterface
    {
        /** @var T $request */
        $request = clone $this;

        $request->headers[$name] = is_array($value) ? $value : [$value];

        return $request;
    }

    /**
     * @inheritDoc
     * @phpstan-return T
     */
    public function withoutHeader($name): MessageInterface
    {
        /** @var T $request */
        $request = clone $this;

        if ($request->hasHeader($name)) {
            unset($request->headers[$name]);
        }

        return $request;
    }

    public function getBody(): StreamInterface
    {
        return $this->body;
    }

    /**
     * @inheritDoc
     * @phpstan-return T
     */
    public function withBody(StreamInterface $body): MessageInterface
    {
        /** @var T $request */
        $request = clone $this;

        $request->body = $body;

        return $request;
    }
}
